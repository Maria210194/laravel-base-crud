@extends('layout.app')
@section('contentMain')

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
    <div class="container column">
        <div>
            <h2>{{$comic->title}}</h2>
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        </div>
        <div>
            <a href="{{route('comics.edit', $comic)}}">Edit the comic</a>
        </div>
        <div>
            <form action="{{route('comics.destroy' , $comic->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="container column">
                    Vuoi cancellare il fumetto?
                </div>

            <input type="submit" value="Cancella"></input>
            </form>
        </div>
        <div>
            <a href="{{route('comics.index')}}">Back</a>
        </div>
    </div>
</body>
</html>
@endsection

