<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;
use App\Models\User;

class TasksController extends Controller
{
    public function index(Request $request)
    {
        $tasks = $request->user()->tasks()->get();

        return view('task.list', compact('tasks'));
      // return view('home', compact('tasks'));


    }

    public function add()
    {
    	return view('task.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'description' => 'required'
        ]);
    	$task = new Task();
    	$task->description = $request->description;
    	$task->user_id = auth()->user()->id;
    	$task->save();
    	return redirect('/dashboard'); 
    }

    public function edit(Task $task)
    {

    	if (auth()->user()->id == $task->user_id)
        {            
                return view('task.edit', compact('task'));
        }           
        else {
             return redirect('/dashboard');
         }            	
    }

    public function update(Request $request, Task $task)
    {
    	if(isset($_POST['delete'])) {
    		$task->delete();
    		return redirect('/dashboard');
    	}
    	else
    	{
            $this->validate($request, [
                'description' => 'required'
            ]);
    		$task->description = $request->description;
	    	$task->save();
	    	return redirect('/dashboard'); 
    	}    	
    }
}
