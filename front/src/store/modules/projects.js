import axios from 'axios';
const qs = require('qs');

//data that will be persisted
const state = {
  all: []
}

const actions = {
  create(context, data){
    data = qs.stringify(data); //converts data to string
    return axios.post('/api/projects', data);
  }
}

export default {
  state,
  actions,
  namespaced: true
}