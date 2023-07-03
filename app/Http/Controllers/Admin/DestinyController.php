<?php

namespace App\Http\Controllers\Admin;

use App\Models\Destiny;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DestinyController extends Controller
{
    //
    public function index(){
        $destinies=Destiny::paginate(10);
        return view('admin.destinies.index',compact('destinies'));
    }
    public function create(){
        return view('admin.destinies.create');
    }
    public function store(Request $request ){
        $destinies=new Destiny();
        $destinies->origin=$request->origin;
        $destinies->destiny=$request->destiny;
        $destinies->price=$request->price;
        $destinies->save();
        
        return redirect()->route('admin.destinies.index');
    }
    public function show($variable){
        $destinies=Destiny::all();
        $destiny=Destiny::find($variable);
        return view('admin.destinies.show',compact('destiny','destinies'));
    }
}
