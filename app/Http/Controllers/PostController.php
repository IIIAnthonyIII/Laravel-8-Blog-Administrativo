<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $postsControl = Post::where('status',2)->latest('id')->paginate(8); //Obtener Post activos -> Filtrar
        //Con latest ordena del ultimo al primero pero necesita parametro, con paginate solo muestra 8 post
        return view('posts.index', compact('postsControl'));
    }
}
