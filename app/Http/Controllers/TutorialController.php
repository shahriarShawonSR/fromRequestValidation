<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;

class TutorialController extends Controller
{   
    public function index()
    {
        return view('welcome');
    }
    
    public function store(CreateUserRequest $request)
    {   
        return $request;
    }
}
