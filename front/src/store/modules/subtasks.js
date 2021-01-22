import crud from '../crud';
import axios from 'axios';
const qs = require('qs');


const subtasks = crud('/api/subtasks');

subtasks.mutations.updateOne = (state, data) => {
    state.all.forEach((item, key) => {
        if (item.id == data.id) {
            state.all.splice(key, 1, data); //If a data is changed the splice changes that data in other places where the data is being used
        }
    })
}

//Mark subtask as complete
subtasks.actions.checked = (context, subtask) => {
    const done = subtask.done == 1 ? 0 : 1;
    const task_id = subtask.task_id;
    const data = {
        done,
        task_id
    }

    return axios.put('/api/subtasks/' + subtask.id, qs.stringify(data)).then((res) => {
        context.commit('updateOne', res.data);
        return res.data;
    })
};

export default subtasks;