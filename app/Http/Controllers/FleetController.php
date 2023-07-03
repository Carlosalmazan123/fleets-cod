<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fleet;

class FleetController extends Controller
{
    //
    public function index(){
        $fleets=Fleet::paginate(6);
        return view('floot',compact('fleets'));
    }
    
    public function show($variable){
        $fleet=Fleet::find($variable);
        return view('fleet',compact('fleet'));
    }
}
