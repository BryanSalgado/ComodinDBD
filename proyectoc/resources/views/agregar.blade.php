<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtrados</title>

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
    <form class="row g-3 needs-validation" action="{{route('nuevoAuto')}}" method="post" novalidate>
        <div class="form-group">
            <label for="exampleInputEmail1">Modelo</label>
            <input type="text" class="form-control" name="modeloA" id="exampleInputEmail1"  aria-describedby="emailHelp"  minlength="8" maxlength="30" required/>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Patente</label>
            <input type="text" class="form-control" name="patenteA" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="BC YZ 09" minlength="8" maxlength="8" required/>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Año</label>
            <input type="integer" class="form-control" name="anoA" id="exampleInputEmail1"  aria-describedby="emailHelp"  minlength="4" maxlength="4" required/>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Color</label>
            <input type="text" class="form-control" name="colorA" id="exampleInputEmail1"  aria-describedby="emailHelp"  minlength="8" maxlength="30" required/>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Valor</label>
            <input type="integer" class="form-control" name="valorA" id="exampleInputEmail1"  aria-describedby="emailHelp"  minlength="5" maxlength="6" required/>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Veces rentado</label>
            <input type="integer" class="form-control" name="rentadoA" id="exampleInputEmail1"  aria-describedby="emailHelp"  minlength="1" maxlength="3" required/>
        </div>
        <div class="col-md-3">
            <label for="suc" class="form-label">Sucursal</label>
            <select type="integer" name="sucursalA" class="form-select" id="suc" required>
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
            <button class="btn btn-primary" type="submit">Agregar</button>
        </div>
    </form>
</body>
</html>