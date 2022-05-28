<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&family=Tiro+Devanagari+Hindi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <title>Comics</title>
</head>
<body>
    <div class="container">
        <form action="{{route('comics.update' , $comic->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="title">Title: </label>
                <input type="text" name="title" value="{{$comic->title}}">
            </div>
            <div>
                <label for="description">Description: </label>
                <textarea name="description" >{{$comic->description}}</textarea>
            </div>
            <div>
                <label for="thumb">Image URL: </label>
                <input type="text" name="thumb" value="{{$comic->thumb}}" />
            </div>
            <div>
                <label for="price">Price: </label>
                <input type="text" name="price" value="{{$comic->price}}" />
            </div>
            <div>
                <label for="series">Series: </label>
                <input type="text" name="series" value="{{$comic->series}}" />
            </div>
            <div>
                <label for="sale_date">Date of sale: </label>
                <input type="date" name="sale_date" value="{{$comic->sale_date}}" />
            </div>
            <div>
                <label for="type">Type: </label>
                <input type="text" name="type" value="{{$comic->type}}" />
            </div>

        <button type="submit">Salva</button>
        </form>
        <div>
            <a href="{{route('comics.show', $comic)}}">Annulla</a>
        </div>
    </div>
    <div class="container">
        <a href="{{route('comics.index')}}">Back</a>
    </div>
</body>
</html>
