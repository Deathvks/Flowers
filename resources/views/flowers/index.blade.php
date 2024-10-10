<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de flores</h1>
    <ul>
        @foreach ($flowers as $f)
            <li>{{$f->species}} de {{$f->color}}</li>
        @endforeach
    </ul>
    <a href="{{ route('flowers.create') }}">Go to add flower</a>
</body>
</html>