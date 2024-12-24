import axios from "axios";

const get = (url, data) => {
    return sendRequest("GET", url, data);
};

const post = (url, data) => {
    return sendRequest("POST", url, data);
};

const sendRequest = (method, url, data) => {
    const params = method === "GET" ? data : {};
    return axios
        .request({
            url: url,
            method: method,
            params: params,
            data: data
        })
        .then((response) => response.data)
        .catch((error) => error /*this.handleResponseError(error, logId)*/);
};

export { get, post };
