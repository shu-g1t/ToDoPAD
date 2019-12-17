@extends('layouts.app')

@section('content')
<div class="todo__wrap">

  <div class="todo__wrap__content">

    <form  id="form-area" class="form-area form-area--sp">
      <div class="inputArea">
        <input v-model="new_task" name="task_name" type="text" class="inputText js-get-val" value="" placeholder="タスクを入力してください" autocomplete="off"><br>
        <span class="error js-toggle-error">入力が空です</span>
      </div>
      <button v-on:click="addTask" class="btn js-add-todo">ToDoを追加</button>
    </form>


     <div class="list js-todo_list" id="js-todo_list">
          <ul class="list-table">
            <li>
              <ul class="list-head">
                <li class="todo-item todo-item__task">タスク</li>
                <li class="todo-item todo-item__date">登録日</li>
                <li class="todo-item todo-item__opt">オプション</li>
              </ul>
            </li>
            <li class="list-body">
              <ul v-bind:class="{task_done: todo.finish_flg === 1}" v-for="todo in todos" class="list-row">
                <li class="todo-item todo-item__task"><span v-show="todo.finish_flg === 1" class="red done_mark">済</span>@{{ todo.task_name }}</li>
                <li class="todo-item todo-item__date">@{{ todo.created_at }}</li>
                <li class="todo-item todo-item__opt"><button v-bind:class="{task_done: todo.finish_flg === 1}" @click="finishTask(todo.id)" class="list--button blue">完了</button><button v-bind:class="{task_done: todo.finish_flg === 1}" @click="deleteTask(todo.id)" class="list--button red">削除</button></li>
              </ul>
            </li>
          </ul>
      </div>




      <form  id="form-area" class="form-area form-area--pc">
        <div class="inputArea">
          <input v-model="new_task" name="task_name" type="text" class="inputText js-get-val" value="" placeholder="タスクを入力してください" autocomplete="off"><br>
          <span class="error js-toggle-error">入力が空です</span>
        </div>
        <button v-on:click="addTask" class="btn js-add-todo">ToDoを追加</button>
      </form>



  </div>

</div>
@endsection
