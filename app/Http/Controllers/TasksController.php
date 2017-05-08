<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
      * Display a list of all of the user's task.
      *
      * @param  Request  $request
      * @return Response
      */
     public function index(Request $request)
     {
         $tasks = Task::where('user_id', $request->user()->id)->get();

         return view('tasks.index', [
             'tasks' => $tasks,
         ]);
     }

     // TODO: Get DI/repository pattern working properly

    //  /**
    //   * Display all tasks belonging to user.
    //   *
    //   * @param  Request  $request
    //   * @return Response
    //   */
    //   public function index(Request $request)
    //   {
    //       return view('tasks.index', [
    //           'tasks' => $this->tasks->forUser($request->user()),
    //       ]);
    //   }

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
