import Vue from 'vue';
import axios from 'axios';
import $ from 'jQuery';

const app = new Vue({
  el:'#app',
  data: {
    new_task:'',
    id: '',
    isDone:false,
    todos: []
  },
  methods: {
    fetchTasks: function(){
      axios.get('/api/get').then((response) => {
        this.todos = response.data
        console.log(response.data);
      })
    },
    addTask : function(){
      axios.post('/api/add', {
        task_name: this.new_task
      }).then((response) =>{
        this.todos = response.data
        this.new_todo = ''
      })
    },
    deleteTask: function(task_id){
      axios.post('/api/del', {
        id: task_id
      }).then((res)=>{
        this.todos = res.data
      })
    },
    finishTask: function(task_id){
      axios.post('api/fin', {
        id:task_id
      }).then((res)=>{
        this.todos = res.data
      })
    }
  },
  created(){
    this.fetchTasks()
  }
});
