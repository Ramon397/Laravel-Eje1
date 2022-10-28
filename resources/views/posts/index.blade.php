<x-layouts.app title="Home" meta-description="Blog meta description">  
       <!---para llamar porpiedades en kebab case-->
    <h1>Blog</h1>
    <a href="{{ route ('posts.create')}}">Crear Nuevo Usuario</a>
   <!-- @dump($post)-->
   @foreach($post as $post)
   <div style="display:flex; align-items:baseline">
      <h2>
         <a href="{{ route('posts.show',$post->id) }}"> 
            {{ $post->title  }}
         </a>   
      </h2> &nbsp;
      <a href="{{ route('posts.edit',$post->id) }}">Editar</a>
      
   </div>   
   <!--<h1> @dump($post) </h1>-->
   @endforeach 
</x-layouts.app>    

