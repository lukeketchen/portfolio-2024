import axios from 'axios';
import swal from 'sweetalert';

window.swal = swal;
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.baseURL = '/api/v1';