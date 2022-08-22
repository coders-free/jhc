<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){
        $posts = Post::where('status', 2)->latest('id')->paginate(16);
  
        return view('posts.index',compact('posts') );
      
    }
  
    public function show(Post $post){

        $this->authorize('published',$post);
        $similares = Post::where('categori_id', $post->categori_id)
            ->where('status', 2)
            ->where('id','!=', $post->id)
            ->latest('id')
            ->take(4)
            ->get();

    return view('posts.show', compact('post', 'similares'));
      
    }

    public function categori(Categori $categori){
        $posts = Post::where('categori_id',$categori->id)
        ->where('status',2)
        ->latest('id')
        ->paginate(6);

        return view('posts.categori', compact('posts','categori'));
    }

    public function tag(Tag $tag){
       $posts = $tag->posts()->where('status',2)->latest('id')->paginate(4);
       return view('posts.tag', compact('posts','tag'));
    }
}
