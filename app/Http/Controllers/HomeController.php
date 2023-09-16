<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class HomeController extends Controller
{
    //
    public function first(){
        return view('task');
    }

    public function store(Request $request){
        $task=new Task;
        $this->validate($request,['task'=>'required|max:100|min:5',]);
        $task->subject = $request->subject;
        $task->task = $request->task;
        $task->save();
        $data=Task::all();
        return redirect('task');
        //return view('task')->with('tasks',$data);

    }

    public function markascompleted($id){
        $task=Task::find($id);
        $task->iscompleted = 1;
        $task->save();
        // return redirect()->back();
        return redirect('task');
    }

    public function markasnotcompleted($id){
        $task=Task::find($id);
        $task->iscompleted = 0;
        $task->save();
        // return redirect()->back();
        return redirect('task');
    }

    public function deletetask($id){
        $task=Task::find($id);
        $task->delete();
        // return redirect()->back();
        return redirect('task');
    }

    public function updatetaskmethod($id){
        $task=Task::find($id);
        return view('updatetask')->with('taskdata',$task);
    }

    public function update(Request $request){
        $this->validate($request,['task'=>'required|max:100|min:5',]);
        $id=$request->id;
        $subject = $request->subject;
        $task = $request->task;
        $data = Task::find($id);
        $data->task=$subject;
        $data->task=$task;
        $data->save();
        $data=Task::all();
        return redirect('task');
        //return view('task')->with('tasks',$data);
    }


}
