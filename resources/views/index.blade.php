<h1>
    Comics
</h1>
@forelse ($comics as $comic)
    <div class="card">
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <h3>{{$comic->title}}</h3>
        <p>{{$comic->price}}</p>
        <p>{{$comic->series}}</p>
        <p>{{$comic->sale_date}}</p>
        <p>{{$comic->type}}</p>
    </div>

@empty
    <h1>No comics found </h1>
@endforelse
