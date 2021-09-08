<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    function home(){
        return "Oi mundo";
    }

    function home2(){
        return "<center> <h1>Oi Fatec </h1></center>";
    }
}
