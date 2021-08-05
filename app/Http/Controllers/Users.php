<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    function index($user){
        // echo $user;
        // echo " Hello from Controller";
        return ['name' => "Swai", 'age' =>27];
    }
}
