<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Vista Productos</title>
</head>
<body>
    <div class="container">
        <h1>Crear Producto</h1>
        <div>
            <form action="{{route('products.store')}}" method="post">
                @csrf
                <label>Nombre del producto</label>
                <input type="text" name="name">
                <br><br>

                <label>Precio del producto</label>
                <input type="number" name="price">
                <br><br>

                <label>Categoria del producto</label>
                <select name="category_id" id="">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                <br><br>

                <label>¿Está Activo?</label>
                <select name="is_active" id="">
                    <option value="true">Sí</option>
                    <option value="false">No</option>
                </select>
                <br><br>

                <button type="submit" class="btn btn-success">Crear Producto</button>
                <hr>
            </form>
        </div>

        <h1>Listado de Productos</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Categoría</th>
                    <th>Activo</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>                    
                        <td>{{$product->name}}</td>                    
                        <td>{{$product->price}}</td>                    
                        <td>{{$product->category->name ?? 'N/A'}}</td>                    
                        <td>{{$product->is_active == 1 ? 'Sí' : 'No'}}</td>                    
                        <td>
                            <a href="{{route('products.edit', $product->id)}}" class="btn btn-primary">Editar</a>
                            <form action="{{route('products.destroy', $product->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>