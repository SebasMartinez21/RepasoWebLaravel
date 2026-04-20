<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Profesores</title>
</head>
<body>
    <div class="container">
        <form action="{{route('teachers.store')}}" method="post">
            @csrf
            <label for="a1">Ingrese el nombre del profesor: </label>
            <input type="text" name="name" id="a1">
            <br>

            <label for="a2">Ingrese la dirección del profesor: </label>
            <input type="text" name="address" id="a2">
            <br>

            <label for="a3">Ingrese la ciudad del profesor: </label>
            <input type="text" name="city" id="a3">
            <br>

            <button class="btn btn-success" type="submit">Crear</button>
        </form>

        <h1>Listado de profesores</h1>
        <table class="table table-danger table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Ciudad</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                <tr>
                    <td>{{$teacher->id}}</td>
                    <td>{{$teacher->name}}</td>
                    <td>{{$teacher->address}}</td>
                    <td>{{$teacher->city}}</td>
                    <td>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>