<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    //
    public function index(){
        $tickets=Ticket::paginate(6);
        return view('ticket',compact('tickets'));
    }
    public function show($variable){
        $ticket=Ticket::find($variable);
        return view('tocket',compact('ticket'));
    }
}
