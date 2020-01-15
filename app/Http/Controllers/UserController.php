<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\User,
    Hash;


class UserController extends Controller
{
    public function index(){
        return 'Estas en el index';
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
        
        return "Registrado correctamente";
    }
    
    public function update(Request $request, $id){
        
    }
    
    public function destroy($id){
        
    }
}
