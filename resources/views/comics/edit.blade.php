<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Edit Comic</title>
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

        <form action="{{ route('comics.update', ['id' => $comic->id]) }}" method="post">
        @csrf
        @method('PUT')

        <span>Title</span>
        <input type="text" name="title" id="title" value="{{ $comic->title}}"><br>

        <span>Description</span>
        <input type="text" name="description" id="description" value="{{ $comic->description}}"><br>

        <span>Thumb</span>
        <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb}}"><br>

        <span>Price</span>
        <input type="number" name="price" id="price" value="{{ $comic->price}}"><br>

        <span>Series</span>
        <input type="text" name="series" id="series" value="{{ $comic->series}}"><br>

        <span>Sale_Date</span>
        <input type="date" name="sale_date" id="sale_date" value="{{ $comic->sale_date}}"><br>

        <span>Type</span>
        <input type="text" name="type" id="type" value="{{ $comic->type}}"><br>

        <input type="submit" value="Save Modify">

        </form>
    </div>
    

</body>
</html>