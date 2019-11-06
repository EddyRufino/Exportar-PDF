<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
{{--         <h1>Exportar datos</h1>
        <p>
            Clic <a href="{{ route('users-pdf.index') }}">aquí</a> para descargar en PDF los usuarios.
        </p> --}}
        <h1>Municipalidad Distrital de Castilla - Piura</h1>

        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ipsa vel saepe eius incidunt perferendis vitae tempora, laborum minus optio quibusdam iure tenetur beatae in, voluptate eveniet, recusandae magni cumque?
        <br>
        <br>
        <br>
        <a href="{{ route('download') }}">Descargar</a>
    </body>
</html>
