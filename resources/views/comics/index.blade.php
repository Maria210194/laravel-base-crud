<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Comics</title>
</head>
<body>
    <h1>
        Comics
    </h1>
    <div class="container">
        @forelse ($comics as $comic)
        <div class="card">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                <a href="{{route('comics.show', $comic->id)}}">More..</a>
                <h3>{{$comic->title}}</h3>
                <p>Price: {{$comic->price}} &euro;</p>
                <p>Series: {{$comic->series}}</p>
                <p>Date of sale: {{$comic->sale_date}}</p>
                <p>Type: {{$comic->type}}</p>
        </div>
        @empty
            <h1>No comics found </h1>
        @endforelse
    </div>



</body>
</html>
