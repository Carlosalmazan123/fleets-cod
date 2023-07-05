<?php

namespace App\Http\Controllers\Admin;

use App\Models\Destiny;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
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
        $request->validate([
            'origin'=>'nullable|min:5|max:25' ,
            'destiny'=>'nullable|min:5|max:25',
            'price'=>'required|max:1000'
        ]);
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
    public function edit($variable){
        $destinies=Destiny::find($variable);
        return view('admin.destinies.edit',compact('destinies'));
    }
    public function update(Request $request,$destinies ){
        $destinies=Destiny::find($destinies);
        $request->validate([
            'origin'=>['required','min:5','max:25', Rule::unique('destinies')->ignore($destinies->id)] ,
            'destiny'=>['nullable','min:5','max:25'],
            'price'=>['required','max:1000']
        ]);
        $destinies->update([
            'origin'=>$request->origin,
            'destiny'=>$request->destiny,
            'price'=>$request->price
        ]);
        
        return redirect()->route('admin.destinies.index');
    }
    public function destroy($variable){
        $destinies=Destiny::find($variable);
        $destinies->delete();
        return redirect()->route('admin.destinies.index');
    }
}
