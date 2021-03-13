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
    <form class="formulario" action="{{route('fil')}}" method="post">
        <div class="col-md-3">
        <label for="filtrar" class="form-label">Filtrar autos por sucursal</label>
            <select type="integer" name="valor" class="form-select" id="filtrar" required>
                <option selected disabled value="">Elige una sucursal</option>
                <option value="1">Sucursal 1</option>
                <option value="2">Sucursal 2</option>
                <option value="3">Sucursal 3</option>
            </select>
            <div class="invalid-feedback">
                Elija una sucursal
            </div>          
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Buscar</button>
        </div>
    </form>
</body>
</html>