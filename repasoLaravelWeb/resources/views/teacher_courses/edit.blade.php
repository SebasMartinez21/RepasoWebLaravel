<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Editar Profesor/Curso</title>
</head>
<body>
    <div class="container">
        <form action="{{route('teacher_courses.update', $teacher_course->id)}}" method="post">
            @csrf
            @method('put')
            <label for="a1">Seleccione el nombre del curso: </label>
            <select name="id_teacher" id="a1">
                @foreach ($teachers as $teacher)
                <option value="{{$teacher->id}}" {{$teacher_course->id_teacher == $teacher->id ? 'selected' : ''}} >{{$teacher->name}}</option>
                @endforeach
            </select>
            <br>

            <label for="a1">Seleccione el nombre del curso: </label>
            <select name="id_course" id="a2">
                @foreach ($courses as $course)
                <option value="{{$course->id}}" {{$teacher_course->id_course == $course->id ? 'selected' : ''}} >{{$course->name}}</option>
                @endforeach
            </select>
            <br>

            <label for="a3">Ingrese el nombre del tutor: </label>
            <input type="text" name="tutor" id="a3" value="{{$teacher_course->tutor}}">
            <br>

            <button class="btn btn-success" type="submit">Editar</button>
        </form>
    </div>
</body>
</html>