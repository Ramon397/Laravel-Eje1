<x-layouts.app title="Crear Nuevo Usuario" meta-description="Formulario para crear un usuario ">  

<h1>Crear Nuevo Usuario</h1>
  <!--@dump($post->toArray()) muestra la info del $post-->
   <!--@dump($errors->all())-->
    <form action="{{ route('posts.store')}}" method="POST"> 
    <!-- @crsf --directiva que protege de ataques crsf el token dura 2 horas-->
        @csrf
        @include('posts.form-fields')         
        <button type="submit">Enviar</button>
        <br>
    </form>

<a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>