<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/inicio">Inicio</a>
        </div>
        <div class="container-fluid">
            <a class="navbar-brand" href="/agregar">Agregar auto</a>
        </div>
    </nav>
    <div class="card-columns">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Modelo: {{$auto->modelo}}</h5>
                <p class="card-text">Color: {{$auto->color}}</p>
                <p class="card-text">Patente: {{$auto->patente}}</p>
                <p class="card-text">Año: {{$auto->ano}}</p>
                <p class="card-text">Veces rentado: {{$auto->veces_rentado}}</p>                
            </div>
        </div>
    </div>
</body>
</html>