import axios from 'axios';
import swal from 'sweetalert';
import dayjs from "dayjs";

window.swal = swal;
window.axios = axios;
window.dayjs = dayjs;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.withCredentials = true;
window.axios.defaults.withXSRFToken = true;

window.axios.defaults.baseURL = '/api/v1';