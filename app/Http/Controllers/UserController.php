<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function show(){
        $users = User::all();
        return view('users.show')->with('users',$users);
    }
}
