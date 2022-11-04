<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SavePostRequest;



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
    public function store(SavePostRequest $request){
        Post::create($request->validated());
        #session()->flash('status','Elemento Creado!'); 
        return to_route('posts.index')->with('status','Usuario Creado');
    }
    public function edit(Post $post){
        return view('posts.edit',['post'=>$post]);
    }
    public function update(SavePostRequest $request,Post $post){
        $post->update($request->validated());        
        #session()->flash('status','Elemento Editado!'); 
        return to_route('posts.show',$post)->with('status','Elemento Elemento');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('posts.index')->with('status', 'Elemento Eliminado');
    }
}