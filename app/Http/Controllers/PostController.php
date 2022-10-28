<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PostController extends Controller
{
    public function index()
    {
        #$posts=Post::get();
        $post=DB::table('usuarios')->get();
        return view ('posts.index',['post'=>$post]);
    }
    public function show(Post $post){
       #return $post;
        return view('posts.show',['post'=>$post]);
    }
    public function create(){
        return view('posts.create',['post'=> new Post]);
    }
    public function store(Request $request){
        #validacion de datos
        $validated = $request->validate([
            'title' => ['required','min:4'],
            'body'  => ['required']
        ]);       
        Post::create($validated);
        session()->flash('status','Elemento Creado!'); 
        return to_route('posts.index');
    }
    public function edit(Post $post){
        return view('posts.edit',['post'=>$post]);
    }
    public function update(Request $request,Post $post){
        #validacion de datos
       $validated=$request->validate([
        'title' => ['required','min:4'],
        'body'  => ['required']
        ]);        
        $post->update($validated);        
        session()->flash('status','Elemento Editado!'); 
        return to_route('posts.show',$post);
    }
}