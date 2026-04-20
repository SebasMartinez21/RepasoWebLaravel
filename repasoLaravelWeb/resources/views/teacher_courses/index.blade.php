<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Profesores y cursos</title>
</head>
<body>
    <div class="container">
        <form action="{{route('teacher_courses.store')}}" method="post">
            @csrf
            <label for="a1">Seleccione el nombre del curso: </label>
            <select name="id_teacher" id="a1">
                @foreach ($teachers as $teacher)
                <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                @endforeach
            </select>
            <br>

            <label for="a1">Seleccione el nombre del curso: </label>
            <select name="id_course" id="a2">
                @foreach ($courses as $course)
                <option value="{{$course->id}}">{{$course->name}}</option>
                @endforeach
            </select>
            <br>

            <label for="a3">Ingrese el nombre del tutor: </label>
            <input type="text" name="tutor" id="a3">
            <br>

            <button class="btn btn-success" type="submit">Crear</button>
        </form>

        <h1>Listado de profesores y cursos</h1>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre del Profesor</th>
                    <th>Nombre del Curso</th>
                    <th>Tutor</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teacher_courses as $teacher_course)
                <tr>
                    <td>{{$teacher_course->id}}</td>
                    <td>{{$teacher_course->teacher->name ?? 'N/A'}}</td>
                    <td>{{$teacher_course->course->name ?? 'N/A'}}</td>
                    <td>{{$teacher_course->tutor}}</td>
                    <td>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>  
</body>
</html>