<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\User,
    Hash,
    Redirect,
    App\Http\Requests\UserRequest;

use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index(){
        // Traer todos
        // $users = User::all();
        // Paginacion: 5 datos
        $users = User::paginate(5);
        return view('users.index')->with('users', $users);
    }
    
    public function show($id){
        return $id;
    }
    

    public function create(){
        return view('users.create');
    }
    
    public function store(Request $request, UserRequest $validator){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        
        
        // Método abreviado para crear usuario
        // @request es un array con los datos
        // User::create($request);
        
        return Redirect::to('user');
    }
    
    public function edit($id){
        // Encuentro un usuario, es un select
        $user = User::find($id);
        return view("users.edit")->with('user', $user);
        
    }
    
    public function update(Request $request, $id){
        // Encontrar usuario
        $user = User::find($id);
        // Esto es un update
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        
        return Redirect::to('user');
    }
    
    public function destroy($id){
        User::destroy($id);
        return Redirect::to('user');
        /* Segunda forma 
        $user = User::find($id);
        $user->delete($id);
        */ 
    }
    

}
