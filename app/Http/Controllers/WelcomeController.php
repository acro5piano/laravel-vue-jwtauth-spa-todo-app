<?php

namespace App\Http\Controllers;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Request;
use App\Task;

class WelcomeController extends Controller
{
    public function tasks(Request $request)
    {
        $my_tasks = Task::all();
        return $my_tasks;
    }
}
