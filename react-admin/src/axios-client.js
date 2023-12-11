import axios from "axios"
import Cookies from 'js-cookie';

const axiosClient = axios.create({
    baseURL: `${import.meta.env.VITE_API_BASE_URL}/api`
})

axiosClient.interceptors.request.use((config) => {
    const token = Cookies.get('TOKEN')
    config.headers.Authorization = `Bearer ${token}`
    
    return config;
})

axiosClient.interceptors.response.use((response) => {
    return response;
}, (error) => {
    const {response} = error;

    switch (response.status) {
        case 401:
            Cookies.remove('TOKEN')
            break;
    
        default:
            break;
    }

    throw error;
})

export default axiosClient;
