<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Show_Comic</title>
</head>
<body>
<div class="wrapper">
        <nav>
            <ul>

                <li><a href="{{ route('home') }}">Home Page</a></li>

                <li><a href="{{ route('comics.create') }}">Add Comic</a></li>

                <li><a href="{{ route('comics.index') }}">Show All Dc Comics</a></li>

            
            </ul>
        </nav>
</div>


    {{-- <main>
    <div class="wrapper">
        <ul>
        <h1>{{ $comic->title }}</h1>
        <ul>
            <li>Description: {{ $comic->description }}</li>
            <li>Price: {{ $comic->price }} €</li>
            <li>Type: {{ $comic->type }}</li>
            <li>Thumb: {{ $comic->thumb }}</li>
            <li>Series: {{ $comic->series }}</li>
        </ul>
    </div>    
    
    </main> --}}
</body>
</html>