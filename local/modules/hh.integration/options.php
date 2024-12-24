<?php

use Bitrix\Main\Application;
use Bitrix\Main\Config\Option;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Text\HtmlFilter;
use Mantix\HeadHunter\Settings;

defined('ADMIN_MODULE_NAME') or define('ADMIN_MODULE_NAME', 'hh.integration');

if (!$USER->isAdmin()) {
    $APPLICATION->authForm('Nope');
}

$lastError = Settings::get('last_auth_error');
if ($lastError) {
    Settings::cleanAccessParams();
}

\Bitrix\Main\Loader::includeModule('hh.integration');

$app = Application::getInstance();
$context = $app->getContext();
$request = $context->getRequest();

Loc::loadMessages($context->getServer()->getDocumentRoot() . "/bitrix/modules/main/options.php");
Loc::loadMessages(__FILE__);

$tabControl = new CAdminTabControl("tabControl", array(
    array(
        "DIV" => "edit1",
        "TAB" => Loc::getMessage("MAIN_TAB_SET"),
        "TITLE" => Loc::getMessage("MAIN_TAB_TITLE_SET"),
    ),
));

if ((!empty($save) || !empty($restore)) && $request->isPost() && check_bitrix_sessid()) {
    if (!empty($restore)) {
        Option::delete(ADMIN_MODULE_NAME);
        CAdminMessage::showMessage(array(
            "MESSAGE" => Loc::getMessage("REFERENCES_OPTIONS_RESTORED"),
            "TYPE" => "OK",
        ));
    }
}

// Сохранить и авторизоваться
if ($request->getPost('save_and_authorize') && $request->isPost() && check_bitrix_sessid()) {

    $redirectUri = $request->getPost('redirect_uri');
    $clientSecret = $request->getPost('client_secret');
    $clientId = $request->getPost('client_id');
    if (
        ($redirectUri && ($redirectUri > 0)) &&
        ($clientSecret && ($clientSecret > 0)) &&
        ($clientId && ($clientId > 0))
    ) {
        Option::set(ADMIN_MODULE_NAME, "redirect_uri", $redirectUri);
        Option::set(ADMIN_MODULE_NAME, "client_secret", $clientSecret);
        Option::set(ADMIN_MODULE_NAME, "client_id", $clientId);
	    $baseAPI = new \Mantix\HeadHunter\BaseApi();
        ?>
        <script>
            window.location.href = '<?=$baseAPI->getOAuthUri()?>';
        </script>
        <?php

        CAdminMessage::showMessage(array(
            "MESSAGE" => Loc::getMessage("REFERENCES_OPTIONS_SAVED"),
            "TYPE" => "OK",
        ));
    } else {
        CAdminMessage::showMessage(Loc::getMessage("REFERENCES_INVALID_VALUE"));
    }
}
$tabControl->begin();
?>

<form method="post"
      action="<?= sprintf('%s?mid=%s&lang=%s', $request->getRequestedPage(), urlencode($mid), LANGUAGE_ID) ?>">
    <?php
    echo bitrix_sessid_post();
    $tabControl->beginNextTab();
    $authParams = Settings::getAccessParams();
    ?>

    <?php if ($authParams['access_token']): ?>
        <tr>
            <td width="40%">
                <label for="redirect_uri">Access token:</label>
            <td width="60%">
                <?= $authParams['access_token'] ?>
            </td>
        </tr>
        <tr>
            <td width="40%">
                <label for="redirect_uri">Refresh token:</label>
            <td width="60%">
                <?= $authParams['refresh_token'] ?>
            </td>
        </tr>
        <tr>
            <td width="40%">
                <label for="redirect_uri">Срок жизни:</label>
            <td width="60%">
                <?= $authParams['expires_in'] ? round(($authParams['expires_in'] / 60) / 60 / 24) . ' дней' : ''; ?>
            </td>
        </tr>
        <tr>
            <td width="40%">
                <label for="redirect_uri">Дата выдачи:</label>
            <td width="60%">
                <?= $authParams['date_create'] ? date('d.m.Y H:i:s', (int)$authParams['date_create']) : "" ?>
            </td>
        </tr>
        <tr>
            <td width="40%">
                <label for="redirect_uri">Дата окончания:</label>
            <td width="60%">
                <?= $authParams['date_expires'] ? date('d.m.Y H:i:s', (int)$authParams['date_expires']) : "" ?>
            </td>
        </tr>
        <tr>
            <td width="40%">
                <label for="redirect_uri">Employer ID:</label>
            <td width="60%">
                <?= $authParams['employer_id']; ?>
            </td>
        </tr>
    <?php endif; ?>

    <tr>
        <td width="40%">
            <label for="redirect_uri">Redirect URI:</label>
        <td width="60%">
            <input type="text"
                   size="80"
                   name="redirect_uri"
                   value="<?= HtmlFilter::encode(Option::get(ADMIN_MODULE_NAME, "redirect_uri")); ?>"
            />
        </td>
    </tr>

    <tr>
        <td width="40%">
            <label for="client_id">Client ID:</label>
        <td width="60%">
            <input type="text"
                   size="80"
                   name="client_id"
                   value="<?= HtmlFilter::encode(Option::get(ADMIN_MODULE_NAME, "client_id")); ?>"
            />
        </td>
    </tr>

    <tr>
        <td width="40%">
            <label for="client_secret">Client Secret:</label>
        <td width="60%">
            <input type="text"
                   size="80"
                   name="client_secret"
                   value="<?= HtmlFilter::encode(Option::get(ADMIN_MODULE_NAME, "client_secret")); ?>"
            />
        </td>
    </tr>

    <tr>
        <td width="100%" colspan="2" align="center">
            <div style="display: flex; align-items: center; width: 100%; margin-top: 10px; justify-content: center;">
                <input type="submit"
                       name="save_and_authorize"
                       value="Авторизоваться"
                       title="Авторизоваться"
                       style="margin-right: 10px;"
                />

                <?php if ($lastError): ?>
                    <strong style="color: red">Ошибка: <?= $lastError ?></strong>
                <?php else: ?>
                    <?php if (!$authParams['date_expires']): ?>
                        <strong style="color: red">Не авторизован</strong>
                    <?php else: ?>
                        <?php if ($authParams['date_expires'] < date('U')): ?>
                            <strong style="color: red">Токен протух</strong>
                        <?php else: ?>
                            <strong style="color: green">Авторизован</strong>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </td>
    </tr>

    <?php
    $tabControl->buttons();
    ?>
    <input type="submit"
           name="save"
           value="<?= Loc::getMessage("MAIN_SAVE") ?>"
           title="<?= Loc::getMessage("MAIN_OPT_SAVE_TITLE") ?>"
           class="adm-btn-save"
    />
    <input type="submit"
           name="restore"
           title="<?= Loc::getMessage("MAIN_HINT_RESTORE_DEFAULTS") ?>"
           onclick="return confirm('<?= AddSlashes(GetMessage("MAIN_HINT_RESTORE_DEFAULTS_WARNING")) ?>')"
           value="<?= Loc::getMessage("MAIN_RESTORE_DEFAULTS") ?>"
    />
    <?php
    $tabControl->end();
    ?>
</form>
