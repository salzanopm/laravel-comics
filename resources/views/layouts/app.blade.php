<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- link scss interno --}}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    @include('partials.topheader')
    @include('partials.header')
    @include('partials.jumbotron')
    <main>
        ciao sono il main
    </main>
    @include('partials.footer')    
</body>
</html>
