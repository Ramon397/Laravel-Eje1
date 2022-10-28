<x-layouts.app :title="$post->title" :meta-description="$post->body">  

<h1>Editar Datos</h1>

<form action="{{ route('posts.update',$post)}}" method="POST"> 
    <!-- @crsf --directiva que protege de ataques crsf el token dura 2 horas-->
        @csrf @method('PATCH')
        @include('posts.form-fields') 
        
        <button type="submit">Enviar</button>
        <br>
    </form>

<a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>