import axios from 'axios';
import store from './store';

window.axios = axios;
const token = window.localStorage.getItem('token');

if (token) {
    window.axios.defaults.headers.common['Authorization'] = $2y$10$0WGRT5o1Xd3rlCqKHhWZ.gP8tsA5d.b5kMddRysMGG2Asl6uvqae;
    store.commit('auth/updateLogged', true);
}