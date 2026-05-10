<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Editar Equipo</title>
</head>
<body>
    <div class="container">
        <div>
            <h1>Editar Equipo</h1>
            <form action="{{route('teams.update', $team->id)}}" method="post">
                @csrf
                @method('put')
                <label for="">Nombre de Equipo: </label>
                <input type="text" name="name" id="" value="{{$team->name}}">
                <br><br>

                <label for="">Fecha de creación: </label>
                <input type="date" name="created_date" id="" value="{{date('Y-m-d', strtotime($team->created_date))}}">
                <br><br>

                <div>
                    <label>¿Está Activo?</label> <br>
                    <input type="radio" name="is_active" id="" value="1" {{$team->is_active == 1 ? 'checked' : ''}}>
                    <label for="">Sí</label>

                    <input type="radio" name="is_active" id="" value="0" {{$team->is_active == 0 ? 'checked' : ''}}>
                    <label for="">No</label>
                </div>

                <button type="submit" class="btn btn-success">Editar Equipo</button>
            </form>
        </div>
    </div>
</body>
</html>