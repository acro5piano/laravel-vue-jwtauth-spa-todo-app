<?php

namespace App\Http\Controllers;

use JWTAuth;
use Illuminate\Http\Request;
use App\Task;
use App\User;

class TaskController extends Controller
{
    // public function index(User $user)
    public function index()
    {
        $user = JWTAuth::parseToken()->authenticate();
        return $user->tasks()->get();
    }

    public function store(Request $request)
    {
        $attr = $request->only('title');
        $user = JWTAuth::parseToken()->authenticate();
        return $user->tasks()->create($attr);
    }

    // public function destroy(Request $request)
    // {
    //     return $request->id;
    // }

    public function update($id, Request $request)
    {
        $task = Task::find($id);
        $task->is_done = true;
        $task->save();
        return $task;
    }
}
