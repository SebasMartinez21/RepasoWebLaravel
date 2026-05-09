<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Consumo de API</title>
</head>
<body>
    <div class="container">
        <button type="button" class="btn btn-warning" onclick="api()">Consumir API</button>

        <div id="resultado"></div>
    </div>

    <script src="{{asset('js/datos.js')}}"></script>
</body>
</html>