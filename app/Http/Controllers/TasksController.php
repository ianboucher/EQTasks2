<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TaskRepository;

class TasksController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var TaskRepository
     */
    protected $tasks;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('auth');
     }

     /**
      * Display all tasks belonging to user.
      *
      * @param  Request  $request
      * @return Response
      */
      public function index(Request $request)
      {
          return view('tasks.index', [
              'tasks' => $this->tasks->forUser($request->user()),
          ]);
      }

      /**
       * Create a new task
       *
       * @param  Request  $request
       * @return Response
       */
       public function store(Request $request)
       {
           $this->validate($request, [
               'description' => 'required|max:255',
           ]);

           $request->user()->tasks()->create([
               'description' => $request->description,
           ]);

           return redirect('/tasks');
       }

       /**
        * Destroy the specified task
        *
        * @param  Request  $request
        * @param  Task $task
        * @return Response
        */
        public function destroy(Request $request, Task $task)
        {
            $this->authorize('destroy', $task);
            $task->detete();
            return redirect('/tasks');
        }
}
