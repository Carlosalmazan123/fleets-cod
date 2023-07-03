<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $users=User::where('user_type_id',1)->get();
       
        return view('users',['users'=>$users]); 
    }
}
