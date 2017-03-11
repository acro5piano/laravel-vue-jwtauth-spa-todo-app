<?php

namespace App\Http\Controllers;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        return response()->json([['id' => 1, 'title' => 'Vue.js', 'content' => 'hello']]);
    }
}
