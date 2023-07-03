<?php

namespace App\Http\Controllers\Admin;

use App\Models\Fleet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FleetController extends Controller
{
    //
    public function index() {
        $fleets=Fleet::paginate(10);
        return view('admin.fleets.index',compact('fleets'));
    }
    public function create(){
        return view('admin.fleets.create');
    }
    public function store(Request $request ){
        $fleets=new Fleet();
        $fleets->type=$request->type;
        $fleets->bathroom=$request->bathroom;
        $fleets->save();
        
        return $request;
    }
    public function show($variable){
        $fleets=Fleet::find($variable);
        return view('admin.fleets.show',compact('fleets'));
    }
}
