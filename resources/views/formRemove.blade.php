<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <div class="container">
        <form action="/produto/remove/post" method="POST">
        @csrf
        <select name="id" id="">
            @foreach($products as $product)
                <option value="{{$product->id}}">{{ $product->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="Remover">
        </form>
    </div>