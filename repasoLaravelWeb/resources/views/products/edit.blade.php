<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Editar Producto</title>
</head>
<body>
    <div class="container">
        <h1>Crear Producto</h1>
        <div>
            <form action="{{route('products.update', $product->id)}}" method="post">
                @csrf
                @method('put')
                <label>Nombre del producto</label>
                <input type="text" name="name" value="{{$product->name}}">
                <br><br>

                <label>Precio del producto</label>
                <input type="number" name="price" value="{{$product->price}}">
                <br><br>

                <label>Categoria del producto</label>
                <select name="category_id" id="">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" {{$product->category_id == $category->id ? 'selected': ''}} >{{$category->name}}</option>
                    @endforeach
                </select>
                <br><br>

                <label>¿Está Activo?</label>
                <select name="is_active" id="">
                    <option value="true" {{$product->is_active == 1 ? 'selected' : ''}}>Sí</option>
                    <option value="false" {{$product->is_active == 0 ? 'selected' : ''}}>No</option>
                </select>
                <br><br>

                <button type="submit" class="btn btn-primary">Editar Producto</button>
            </form>
        </div>
    </div>
</body>
</html>