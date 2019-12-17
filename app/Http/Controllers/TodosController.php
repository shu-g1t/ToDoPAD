<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Auth;


class TodosController extends Controller
{

  public function index(){
    return view('todo');
  }

  //全件表示
  public function get(){
    return response()->json(Auth::user()->tasks()->get());
  }

  //1件追加
  public function post(Request $request){
    $task = new Task();
    $task->task_name = $request->task_name;
    $task->user_id = Auth::id();
    $task->save();

  }
  //1件削除
  public function delete(Request $request){
      //Task::find($id)->delete();
      $todo = Task::where('id', $request->id)->delete();
      return response()->json(Auth::user()->tasks()->get());
  }
  //タスク完了処理
  public function finish(Request $request){
    $todo = Task::where('id', $request->id)
            ->update([ 'finish_flg' => 1 ]);
    return response()->json(Auth::user()->tasks()->get());
  }
}
