<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejemplo-{{ $title?? ''}}</title>
        <meta name="description" content="{{ $metaDescription ?? 'Default meta description'}}"><!-- definir propiedades en camel case --->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"></script>
    </head>
    <body>
        <x-layouts.navigation/>       
        @if(session('status'))
        <div>{{ session('status') }}</div>
        @endif
        {{ $slot }}
       
    </body>
</html>