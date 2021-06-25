<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Add Comic</title>
</head>
<body>

    <div class="wrapper">

        <li><a href="{{ route('home') }}">Back To Home</a></li>

        <h4>Add Your Comic</h4>


        @include('partials.components.errors')

        <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <span>Title</span>
        <input type="text" name="title" id="title"><br>

        <span>Description</span>
        <input type="text" name="description" id="description"><br>

        <span>Thumb</span>
        <input type="text" name="thumb" id="thumb"><br>

        <span>Price</span>
        <input type="number" name="price" id="price"><br>

        <span>Series</span>
        <input type="text" name="series" id="series"><br>

        <span>Sale_Date</span>
        <input type="date" name="sale_date" id="sale_date"><br>

        <span>Type</span>
        <input type="text" name="type" id="type"><br>

        <input type="submit" value="Add Comic">
        
        </form>

    </div>
</body>
</html>