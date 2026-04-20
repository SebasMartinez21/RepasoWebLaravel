<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Editar Profesor</title>
</head>
<body>
    <div class="container">
        <form action="{{route('teachers.update', $teacher->id)}}" method="post">
            @csrf
            @method('put')
            <label for="a1">Ingrese el nombre del profesor: </label>
            <input type="text" name="name" id="a1" value="{{$teacher->name}}">
            <br>

            <label for="a2">Ingrese la dirección del profesor: </label>
            <input type="text" name="address" id="a2" value="{{$teacher->address}}">
            <br>

            <label for="a3">Ingrese la ciudad del profesor: </label>
            <input type="text" name="city" id="a3" value="{{$teacher->city}}">
            <br>

            <button class="btn btn-success" type="submit">Editar</button>
        </form>
    </div>
</body>
</html>