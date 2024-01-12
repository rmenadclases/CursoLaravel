<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //Creamos un método para visualizar un usuario
    public function show(User $user){
        return view('users.show',[
            'posts'=> $user->posts()->latest()->paginate()
        ]);

        
    }
}
