<?php

namespace Mantix\HeadHunter;


class Vacancies
{

    /*
     * Получение всех активных вакансий
     * */
    public static function getActive(): array
    {
        $result = [];
        $employerId = Settings::getEmployerID();
        if (!$employerId) {
            return $result;
        }


        $page = 0;
        while (true) {

            $partResult = (new BaseApi())->getActiveVacancies($employerId, $page);
            if (!$partResult['status'] === 'success') {
                break;
            }

            $data = $partResult['data'];
            if ($data['pages'] < $page || empty($data['items'])) {
                break;
            }

            $result = array_merge($result, $data['items']);
            $page++;
        }

        return $result;
    }
}
