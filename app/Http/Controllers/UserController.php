<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\User,
    Hash,
    Redirect;


class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index')->with('users', $users);
    }
    
    public function show($id){
        return $id;
    }
    
    public function create(){
        return view('users.create');
    }
    
    public function store(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        
        return Redirect::to('user');
    }
    
    public function edit($id){
        $user = User::find($id);
        return view("users.edit")->with('user', $user);
        
    }
    
    public function update(Request $request, $id){
        // Encontrar usuario
        $user = User::find($id);
        return $user;
    }
    
    public function destroy($id){
        
    }
}
