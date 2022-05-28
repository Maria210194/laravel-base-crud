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
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div>
                <label for="title">Title: </label>
                <input type="text" required name="title">
            </div>
            <div>
                <label for="description">Description: </label>
                <textarea name="description"></textarea>
            </div>
            <div>
                <label for="thumb">Image URL: </label>
                <input type="text" required name="thumb">
            </div>
            <div>
                <label for="price">Price: </label>
                <input type="text" required name="price">
            </div>
            <div>
                <label for="series">Series: </label>
                <input type="text" name="series">
            </div>
            <div>
                <label for="sale_date">Date of sale: </label>
                <input type="date" name="sale_date">
            </div>
            <div>
                <label for="type">Type: </label>
                <input type="text" required name="type">
            </div>

        <button type="submit">Salva</button>
        </form>
    </div>
    <div class="container">
        <a href="{{route('comics.index')}}">Annulla</a>
    </div>
</body>
</html>
