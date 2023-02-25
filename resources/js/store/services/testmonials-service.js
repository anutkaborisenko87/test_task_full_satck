import axios from 'axios';


function getUsersList() {
    return axios.get(`/api/users`).then((response) => {
        return {
            usersList: response.data,
        };
    })
}
export default {
    getUsersList
};
