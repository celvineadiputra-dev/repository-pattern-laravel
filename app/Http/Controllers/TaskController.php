<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\UpdateTaskRequest;
use App\Services\Task\TaskService;
use App\Utils\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    use ResponseTrait;
    protected $task;

    public function __construct(TaskService $task)
    {
        $this->task = $task;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $task = $this->task->getAllActive();
            return $this->infoResponse(200, $task, "List Task");
        } catch (\Throwable $e) {
            return $this->errorResponse(500, [], $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validate = Validator::make($request->all(), [
                "name" => 'required',
                "description" => 'required',
            ]);
            if ($validate->fails()) {
                return $this->errorResponse(422, $validate->errors(), "Error Validation");
            }

            $data = $this->task->create([
                'name' => $request->name,
                'description' => $request->description
            ]);

            return $this->infoResponse(200, $data, "Task has been created");
        } catch (\Throwable $e) {
            return $this->errorResponse(500, [], $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaskRequest  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
