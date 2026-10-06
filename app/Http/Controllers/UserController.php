<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    //

    public function index(){
        $data = User::get();
        return view('user.index',compact('data'));
    }

    public function setRole($user,$role){
        $user = User::find($user);
        $user->assignRole($role); 
        session()->flash('message','User Diatur Ke Mode Admin');
    }
}
