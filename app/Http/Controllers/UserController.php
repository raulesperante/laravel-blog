<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        
    }
    
    public function update(Request $request, $id){
        
    }
    
    public function destroy($id){
        
    }
}
