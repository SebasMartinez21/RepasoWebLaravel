<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Productos Relacionados a categoría</title>
</head>
<body>
    <div class="container">
        <h1>Listado de Productos relacionados a la categoría {{$category_name}}</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Categoría</th>
                    <th>Activo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products_rel as $product)
                    <tr>
                        <td>{{$product->id}}</td>                    
                        <td>{{$product->name}}</td>                    
                        <td>{{$product->price}}</td>                    
                        <td>{{$product->category->name ?? 'N/A'}}</td>                    
                        <td>{{$product->is_active == 1 ? 'Sí' : 'No'}}</td>                    
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>