<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejemplo-{{ $title?? ''}}</title>
        <meta name="description" content="{{ $metaDescription ?? 'Default meta description'}}"><!-- definir propiedades en camel case --->
            @vite(['resources/css/app.scss','resources/js/app.js'])
        <!--<link rel="stylesheet" href="/css/app.css">-->
        <!--<script src="/js/app.js"></script>-->
    </head>
    <body>
        <x-layouts.navigation/>       
        @if(session('status'))
        <div>{{ session('status') }}</div>
        @endif
        {{ $slot }}
       
    </body>
</html>