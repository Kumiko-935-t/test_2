<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Http\Controllers\RegisterController;
use App\Http\Requests\ProductRequest;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function index(){
        return view('index');
    }

    //public function 
}
