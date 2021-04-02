<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    //
    public function index()
    {
        //
        return view('users');
    }

    public function store(Request $request)
    {
        //
        $users = new Users();

        $users->name = $request->input('username');
        $users->surname = $request->input('surname');
        $users->email = $request->input('email');
        
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'.$extension;
            $file->move('uploads/user/', $filename);
            $users->image = $filename;
        } else {
            return $request;
            $users->image = '';
        }

        $users->save();
        return view('users')->with('users', $users);
    }

    public function display(){
        $users = Users::all();
        return view('usershow')->with('users', $users);
    }
}
