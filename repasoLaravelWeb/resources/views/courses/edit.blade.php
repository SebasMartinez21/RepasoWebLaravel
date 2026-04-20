<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Editar Curso</title>
</head>
<body>
    <div class="container">
        <form action="{{route('courses.update', $course->id)}}" method="post">
            @csrf
            @method('put')
            <label for="a1">Ingrese el nombre del curso: </label>
            <input type="text" name="name" id="a1" value="{{$course->name}}">
            <br>

            <label for="a2">Ingrese la descripción del curso: </label>
            <input type="text" name="descr" id="a2" value="{{$course->descr}}">
            <br>

            <label for="a3">Ingrese los creditos del curso: </label>
            <input type="number" name="credits" id="a3" value="{{$course->credits}}">
            <br>

            <button class="btn btn-success" type="submit">Editar</button>
        </form>
    </div>
</body>
</html>