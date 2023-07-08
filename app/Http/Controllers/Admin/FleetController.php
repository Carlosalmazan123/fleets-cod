<?php

namespace App\Http\Controllers\Admin;

use App\Models\Fleet;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\SheetDay;

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
        $request->validate([
            'type'=>['required','min:5','max:25'],
            'bathroom'=>['nullable','max:2'],
            'name'=>['required','max:125'],
            'assistant'=>['required','max:25']
        ]);
        $sheet=new SheetDay();
        $sheet->name=$request->name;
        $sheet->assistant=$request->assistant;
        $sheet->save();
        $fleets=new Fleet();
        $fleets->type=$request->type;
        $fleets->bathroom=$request->bathroom;
        $fleets->sheet_day_id=$sheet->id;
        $fleets->save();
        
        return redirect()->route('admin.fleets.index');
    }
    public function show($variable){
        $fleets=Fleet::find($variable);
        return view('admin.fleets.show',compact('fleets'));
    }
    public function edit($variable){
        $fleets=Fleet::find($variable);
        return view('admin.fleets.edit',compact('fleets'));
    }
    public function update(Request $request,$fleets ){
        $fleets=Fleet::find($fleets);
        $request->validate([
            'type'=>['required','min:5','max:25', Rule::unique('fleets')->ignore($fleets->id)] ,
            'bathroom'=>['nullable','max:25'],
            'name'=>['required','max:25'],
            'assistant'=>['required','max:25']
        ]);
        $fleets->update([
            'type'=>$request->type,
            'bathroom'=>$request->bathroom
        ]);
        $fleets->sheet_day()->first()->update([
            'name'=>$request->name,
            'assistant'=>$request->name
        ]);
        
        return redirect()->route('admin.fleets.index');
    }
    public function destroy($variable){
        $fleets=Fleet::find($variable);
        $fleets->delete();
        return redirect()->route('admin.fleets.index');
    }
}
