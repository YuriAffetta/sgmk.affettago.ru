import { get, post } from "./request.js";

const bitrixComponent = (component, action, params, mode = "ajax") => {
    params = Object.assign(params, {
        c: component,
        mode: mode,
        action: action
    });
    return post(
        `/bitrix/services/main/ajax.php?c=${component}&mode=${mode}&action=${action}`,
        params
    );
};

export { bitrixComponent };
