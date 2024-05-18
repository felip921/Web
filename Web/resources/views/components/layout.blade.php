<html>
    <head>
        <title>{{ $title ?? 'Meu site' }}</title>
        <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
    </head>
    <body>
        
    <nav>
        <h3>Bem vindo</h3>
        <hr>
    </nav>
    {{$slot}}
    <footer>
        <hr/>
        Felipe
    </footer>
    </body>
</html>
