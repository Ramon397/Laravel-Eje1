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
        #dd($validated);
        #return 'Datos Enviados';
        //$post= new  Post;
        //$post->title=$request->input('title');
        //$post->body=$request->input('body');
        //$post->save();esto es igual lo de abajo
        Post::create($validated);
        #return $request->input('title');
        #return redirect()->route('posts.index');#redirecciona al index
        session()->flash('status','Elemento Creado!'); 
        return to_route('posts.index');#mas simple se usa to_route
    }
    public function edit(Post $post){
       # return $post;
        return view('posts.edit',['post'=>$post]);
    }
    public function update(Request $request,Post $post){
        # return $post;
       #validacion de datos
       $validated=$request->validate([
        'title' => ['required','min:4'],
        'body'  => ['required']
        ]);
        #return 'Datos Enviados';
        #$post= Post::find($post); # esta linea se deja inutilizable al añadir Post como variables  
        //$post->title=$request->input('title');
        //$post->body=$request->input('body');
        //$post->save();
        $post->update($validated);
        #return $request->input('title');
        #return redirect()->route('posts.index');#redirecciona al index
        session()->flash('status','Elemento Editado!'); 
        return to_route('posts.show',$post);#mas simple se usa to_route
        #2:06:14
    }
}