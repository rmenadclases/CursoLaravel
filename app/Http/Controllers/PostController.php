<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        return view ('posts.index', [
            'posts' => Post::latest()->paginate()
        ]);
    }
    public function store(Request $request){ 
        //Realizaremos la validación
        $request->validate(['body'=>'required']);//Esto lo que indica es que body es requerida.
        //dd(['body'=>$request->body]);//Helper para logs
        $request->user()->posts()->create($request->only('body'));//Ahora le estamos indicando que cree una publicación apartir de este usuario con solo el contenido dle body
        return back()->with('status',"Publicación guardada exitosamente");
    }
    public function destroy(Request $request,Post $post){//Le pasamos el id por parametro
        //db($request->user()->id);//Obtenemos el id del usuario logado

        $this->authorize('delete', $post);
                         
        $post->delete();//Le decimos que elimine el que hemos encontrado
        return back();//Y que vuelva a la pantalla anterior
    
    }
}
