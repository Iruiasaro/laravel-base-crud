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

                <li><a href="{{ route('home') }}">Back To Home Page</a></li>

            </ul>
        </nav>
</div>


    <main>
    <div class="wrapper_result">
        <ul>
        <h2>{{ $comic->title }}</h2>
        <ul>
            <li>Series: {{ $comic->series }}</li>
            <li>Thumb: {{ $comic->thumb }}</li>
            <li>Price: {{ $comic->price }} €</li>
            <li>Description: {{ $comic->description }}</li>
            <li>Type: {{ $comic->type }}</li>
        </ul>

        <div class="wrap_edit">
        
            <button>
            <a href="{{ route('comics.edit', ['id' => $comic->id]) }}">Comic Modify</a>
            </button>

            <form action="{{ route('comics.destroy', ['id' => $comic->id]) }}" method="post">
            @csrf
            @method('DELETE')
    
            <input type="submit" value="Delete Comic">
    
            </form>
        </div>
    </div>    
    
    </main>
</body>
</html>