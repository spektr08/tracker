<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Resources\TaskResource;
use App\Http\Resources\TaskCollection;
use App\Http\Requests\TaskRequest;

class TaskController extends  BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return new TaskCollection(Task::paginate());
    }
     
    public function show(Task $task)
    {  
        return $this->sendResponse(new TaskResource($task));
    }
    
    public function create(TaskRequest $request)
    {
        try {
            $task = Task::make(
                [
                'name' => $request['name'],
                'description' => $request['description'],
                ]
            );
            $task->saveOrFail();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }       
        return $this->sendResponse(new TaskResource($task));
    }
    
    public function edit(TaskRequest $request,Task $task)
    {

        try {
            $task->update(
                [
                'name' => $request['name'],
                'description' => $request['description'],
                ]
            );
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }       
        return $this->sendResponse(new TaskResource($task));
    }
    
    public function delete(Task $task)
    {
        try {
            $task->delete();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }       
        return $this->sendResponse(new TaskResource($task));
    }
}
