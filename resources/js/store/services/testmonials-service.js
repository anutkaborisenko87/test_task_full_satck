import axios from 'axios';


function getTestimonialsList(params) {
    let url = `/api/testimonials`;
    if (params !== '') {
        url += '?page=' + params;
    }
    return axios.get(url).then((response) => {
        return {
            testimonialsList: response.data,
            meta: response.data.meta,
        };
    })
}
export default {
    getTestimonialsList
};
