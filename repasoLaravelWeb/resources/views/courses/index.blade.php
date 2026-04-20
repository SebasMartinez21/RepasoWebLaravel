<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Cursos</title>
</head>
<body>
    <div class="container">
        <form action="{{route('courses.store')}}" method="post">
            @csrf
            <label for="a1">Ingrese el nombre del curso: </label>
            <input type="text" name="name" id="a1">
            <br>

            <label for="a2">Ingrese la descripción del curso: </label>
            <input type="text" name="descr" id="a2">
            <br>

            <label for="a3">Ingrese los creditos del curso: </label>
            <input type="number" name="credits" id="a3">
            <br>

            <button class="btn btn-success" type="submit">Crear</button>
        </form>

        <h1>Listado de cursos</h1>
        <table class="table table-warning table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Creditos</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                <tr>
                    <td>{{$course->id}}</td>
                    <td>{{$course->name}}</td>
                    <td>{{$course->descr}}</td>
                    <td>{{$course->credits}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>  
    
</body>
</html>