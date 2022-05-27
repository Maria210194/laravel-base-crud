<form action="{{route('comics.store')}}" method="POST">
    @csrf
    <div>
        <label for="title">Title: </label>
        <input type="text" name="title">
    </div>
    <div>
        <label for="description">Description: </label>
        <textarea name="description"></textarea>
    </div>
    <div>
        <label for="thumb">Image URL: </label>
        <input type="text" name="thumb">
    </div>
    <div>
        <label for="price">Price: </label>
        <input type="text" name="price">
    </div>
    <div>
        <label for="series">Series: </label>
        <input type="text" name="series">
    </div>
    <div>
        <label for="sale_date">Date of sale: </label>
        <input type="text" name="sale_date">
    </div>
    <div>
        <label for="type">Type: </label>
        <input type="text" name="type">
    </div>

<button type="submit">Salva</button>
</form>
