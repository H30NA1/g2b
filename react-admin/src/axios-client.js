import axios from "axios"

const axiosClient = axios.create({
    baseURL: `${import.meta.env.VITE_API_BASE_URL}/api`
})

axiosClient.interceptors.request.use((config) => {
    const token = localStorage.getItem('TOKEN')
    config.headers.Authorization = `Bearer ${token}`
    
    return config;
})

axiosClient.interceptors.response.use((response) => {
    return response;
}, (error) => {
    const {response} = error;

    switch (response.status) {
        case 401:
            localStorage.removeItem('TOKEN')
            break;
    
        default:
            break;
    }

    throw error;
})

export default axiosClient;
