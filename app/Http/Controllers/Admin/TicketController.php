<?php

namespace App\Http\Controllers\Admin;

use App\Models\Seat;
use App\Models\Fleet;
use App\Models\Ticket;
use App\Models\Destiny;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\SeatTicket;

class TicketController extends Controller
{
    //
    public function index() {
        $tickets=Ticket::paginate(10);
        $fleets=Fleet::all();
        return view('admin.tickets.index',compact('tickets','fleets'));
    }
    public function create(){
        $seats=Seat::all();
        $fleets=Fleet::all();
        $destinies=Destiny::all();
        return view('admin.tickets.create',compact('seats','destinies','fleets'));
    }
    public function store(Request $request ){
        $request->validate([
            'name'=>['required' ,'max:25' ],
            'last_name'=>['required','max:25'],
            'CI'=>['required','max:25'],
            'fleet_id'=>['required','integer'],
            'seat'=>['required','max:1000'],
            'destiny_id'=>['required','integer'],
            'total'=>['required','max:25'],
            'schedule'=>['required','max:13']
        ]);
        $Customer=new Customer();
        $Customer->name=$request->name;
        $Customer->last_name=$request->last_name;
        $Customer->CI=$request->CI;
        $Customer->save();


        $tickets=new Ticket();
        $tickets->total=$request->total;
        $tickets->destiny_id=$request->destiny_id;
        $tickets->customer_id=$Customer->id;
        $tickets->schedule=$request->schedule;
        $tickets->save();

        $Seat=new Seat();
        $Seat->seat=$request->seat;
        $Seat->ticket_id=$tickets->id;
        $Seat->fleet_id=$request->fleet_id;
        $Seat->save();

        
        return redirect()->route('admin.tickets.index');
    }
    public function show($variable){
        $tickets=Ticket::find($variable);
        return view('admin.tickets.show',compact('tickets'));
    }
    public function edit($variable){
        $tickets=Ticket::find($variable);
        $fleets=Fleet::all();
        $destinies=Destiny::all();
        $seats=Seat::all();
        return view('admin.tickets.edit',compact('tickets','fleets','destinies','seats'));
    }
    public function update(Request $request,$tickets ){
        $tickets=Ticket::find($tickets);
        $request->validate([
            'total'=>['required' ,'max:25' , Rule::unique('tickets')->ignore($tickets->id)] ,
            'destiny_id'=>['required','integer'],
            'name'=>['required','max:25'],
            'last_name'=>['required','max:25'],
            'CI'=>['required','max:25'],
            'seat'=>['required','max:25'],
            'schedule'=>['required','max:24']
        ]);
        $tickets->update([
         
            
            'total'=>$request->total,
            'destiny_id'=>$request->destiny_id,
            'schedule'=>$request->schedule
            
        ]);
        $tickets->customer()->first()->update([
            'name'=>$request->name,
            'last_name'=>$request->last_name,
            'CI'=>$request->CI
        ]);
        $tickets->seats()->first()->update([
            'seat'=>$request->seat
        ]);

        return redirect()->route('admin.tickets.index');
    }
    public function destroy($variable){
        $tickets=Ticket::find($variable);
        $tickets->delete();
        return redirect()->route('admin.tickets.index');
    }
}
