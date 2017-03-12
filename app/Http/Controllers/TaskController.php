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
        return $user->tasks()->get()->keyBy('id');
    }

    public function store(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        // eval(\Psy\Sh());
        return $user->tasks()->create($request->only('title'))->fresh();
    }

    public function destroy($id)
    {
        return Task::destroy($id);
    }

    public function update($id, Request $request)
    {
        $task = Task::find($id)->fill($request->only('is_done'));
        $task->save();
        return $task->fresh();
    }
}
