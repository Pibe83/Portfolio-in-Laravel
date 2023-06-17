<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    public function index()
    {
        return 'My First Controller';
    }
    
}
