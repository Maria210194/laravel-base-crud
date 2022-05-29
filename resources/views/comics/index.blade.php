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
    <h1 class="text-focus-in">
        Comics
    </h1>
    <div class="container">
        @forelse ($comics as $comic)
        <div class="card">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}"><br>
                <a href="{{route('comics.show', $comic->id)}}">More..</a><br>
                <a href="{{route('comics.edit', $comic->id)}}">Edit the comic</a>
                <div>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="delete-button heartbeat" type="submit">
                            Elimina
                        </button>

                    </form>
                </div>
                <h3>{{$comic->title}}</h3>
                <p>Price: {{$comic->price}} &euro;</p>
                <p>Series: {{$comic->series}}</p>
                <p>Date of sale: {{$comic->sale_date}}</p>
                <p>Type: {{$comic->type}}</p>
        </div>
        @empty
            <h1>No comics found </h1>
        @endforelse
        <div class="card newcomic heartbeat">
            <a href="{{route('comics.create', $comic->id)}}">Create new comic</a>
        </div>
    </div>

    <script src="{{asset('js/app.js')}}" defer></script>
</body>
</html>

