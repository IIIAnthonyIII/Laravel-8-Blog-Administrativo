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

    public function show(Post $post) {
        $similaresController = Post::where('category_id', $post->category_id)
                            ->where('status',2)
                            ->where('id','!=', $post->id)
                            ->latest('id')
                            ->take(4)
                            ->get();
        return view('posts.show', compact('post', 'similaresController')); //Con compact se pasan datos
    }
}