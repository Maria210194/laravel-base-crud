<h1>More details </h1>

<div>
    <h2>{{$comic->title}}</h2>
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    <p></p>
</div>

<a href="{{route('comics.index')}}">Back</a>

<form action="{{route('comics.destroy' , $comic->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <div class="container">
        Sicuro di voler cancellare il fumetto?
    </div>

<input type="submit" value="Cancella"></input>
</form>


