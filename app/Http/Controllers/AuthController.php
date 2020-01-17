<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    Auth,
    Redirect;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    
    public function store(Request $request){
        // Se están validando los campos email y password
        if(Auth::attempt(['email' => $request->email,
                          'password' => $request->password])){
            return Redirect::to('/');
        }else{
            // Se podría mandar un mensaje a la vista
            return "Datos incorrectos";
        }
    }
    
    public function logout(){
        Auth::logout();
        return Redirect::to('/');
    }
    
}
