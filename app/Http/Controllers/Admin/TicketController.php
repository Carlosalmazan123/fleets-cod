<?php

namespace App\Http\Controllers\Admin;

use App\Models\Seat;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketController extends Controller
{
    //
    public function index() {
        $tickets=Ticket::paginate(10);
        return view('admin.tickets.index',compact('tickets'));
    }
    public function create(){
        return view('admin.tickets.create');
    }
    public function store(Request $request ){
        $tickets=new Ticket();
        $tickets->total=$request->total;
        $tickets->schedule=$request->schedule;
        $tickets->save();
        
        return $request;
    }
    public function show($variable){
        $tickets=Ticket::find($variable);
        return view('admin.tickets.show',compact('tickets'));
    }
}
