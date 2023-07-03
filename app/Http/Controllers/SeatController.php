<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seat;

class SeatController extends Controller
{
    //
    public function show($seat){
        $tickets=Seat::find($seat)->tickets()->paginate(6);
        $seat=Seat::find($seat);
        return view('seats.show',compact('tickets','seat'));
    }
}
