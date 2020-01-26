<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    Auth,
    Redirect,
    Socialite,
    App\User;

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
    
    
    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    
    /**
     * Obtain the user information from Facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
     
        $user_db = User::where('email', $user->getEmail())->first();

        if($user_db->email == $user->getEmail()){
            Auth::login($user_db, true);
            return redirect()->to('/');
        }else{
            return "Tu email: {$user->getEmail()} no está registrado en esta página";
        }

 
    }
    
}
