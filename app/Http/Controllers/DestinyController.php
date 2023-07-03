<?php

namespace App\Http\Controllers;

use App\Models\Destiny;
use Illuminate\Http\Request;

class DestinyController extends Controller
{
    //
    public function index(){
        $destinies=Destiny::paginate(9);
        return view('destinies',compact('destinies'));
    }
    public function show($variable){
        $destiny=Destiny::find($variable);
        return view('show',compact('destiny'));
    }
}
