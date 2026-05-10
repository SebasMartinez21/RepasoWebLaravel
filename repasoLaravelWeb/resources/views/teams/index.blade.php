<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Vista de Equipos</title>
</head>
<body>
    <div class="container">
        <div>
            <h1>Registrar Equipo</h1>
            <form action="{{route('teams.store')}}" method="post">
                @csrf
                <label for="">Nombre de Equipo: </label>
                <input type="text" name="name" id="">
                <br><br>

                <label for="">Fecha de creación: </label>
                <input type="date" name="created_date" id="">
                <br><br>

                <div>
                    <label>¿Está Activo?</label> <br>
                    <input type="radio" name="is_active" id="" value="1">
                    <label for="">Sí</label>

                    <input type="radio" name="is_active" id="" value="0">
                    <label for="">No</label>
                </div>
                <br>

                <button type="submit" class="btn btn-success">Crear Equipo</button>
            </form>
        </div>
        <br>

        <h1>Listado de Equipos</h1>
        <table class="table table-striped">
            <thead>
                <tr>    
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Fecha de Creación</th>
                    <th>¿Está Activo?</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teams as $team)
                    <tr>
                        <td>{{$team->id}}</td>
                        <td>{{$team->name}}</td>
                        <td>{{$team->created_date}}</td>
                        <td>{{$team->is_active == 1 ? 'Sí' : 'No'}}</td>
                        <td>
                            <a href="{{route('teams.edit', $team->id)}}" class="btn btn-primary">Editar</a>
                            <form action="{{route('teams.destroy', $team->id)}}" method="post">
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