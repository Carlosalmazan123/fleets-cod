<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function index(){
        $users=User::paginate(10);
        return view('admin.users.index',compact('users'));
    }
    public function create(){
        return view('admin.users.create');
    }
    public function store(Request $request ){
        $request->validate([
            'name'=>'nullable|min:5|max:25' ,
            'email'=>'nullable|min:5|max:25',
            'user_type'=>'required|max:1000',
            'password'=>'nullable|min:5|max:25'
        ]);
        $users=new User();
        $users->name=$request->name;
        $users->email=$request->email;
        $users->user_type=$request->user_type;
        $users->password=$request->password;
        $users->save();
        
        return redirect()->route('admin.users.index');
    }
    public function show($variable){
        $users=User::find($variable);
        return view('admin.users.show',compact('users'));
    }
    public function edit($variable){
        $users=User::find($variable);
        return view('admin.users.edit',compact('users'));
    }
    public function update(Request $request,$users ){
        $users=User::find($users);
        $request->validate([
            'name'=>['required','min:5','max:25', Rule::unique('users')->ignore($users->id)] ,
            'email'=>['nullable','min:5','max:25'],
            'user_type'=>['required','max:1000'],
            'password'=>['required','max:25']
        ]);
        $users->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'user_type'=>$request->user_type,
            'password'=>$request->password
        ]);
        
        return redirect()->route('admin.users.index');
    }
    public function destroy($variable){
        $users=User::find($variable);
        $users->delete();
        return redirect()->route('admin.users.index');
    }
}
