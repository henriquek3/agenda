<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Contatos</title>

       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/contatos.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('css/semantic.min.css') }}">

    </head>
    <body>
        <div class="ui container">
            @yield('content')
        </div>

        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ mix('js/contatos.js') }}"></script> --}}
         <script src="{{ asset('js/jquery.min.js') }}"></script>
         <script src="{{ asset('js/semantic.min.js') }}"></script>
    </body>
</html>
