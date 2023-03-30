<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
@include('header')
<body>
    <div class="row">
        <div class= col-6>
        <div class="container" style="background-color: #3498DB; padding: 20px;">
    <h2 style="color: #FFF;">Formulario</h2>
    <hr style="border: 1px solid #FFF;">
    <form method="POST" action="{{ route('formulario.store') }}">
        @csrf
        <div class="form-group">
            <label for="nombre" style="color: #FFF;">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="apellido" style="color: #FFF;">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        <div class="form-group">
            <label for="dni" style="color: #FFF;">DNI</label>
            <input type="text" class="form-control" id="dni" name="dni" required>
        </div>
        <div class="form-group">
            <label for="email" style="color: #FFF;">Email</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento" style="color: #FFF;">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
        </div>
        <div class="form-group">
            <label for="educacion_alcanzada" style="color: #FFF;">Educación Alcanzada</label>
            <select class="form-control" id="educacion_alcanzada" name="educacion_alcanzada" required>
                <option value="Primaria">Primaria</option>
                <option value="Secundaria">Secundaria</option>
                <option value="Universidad">Universidad</option>
            </select>
        </div>
        <div class="form-group">
            <label for="edad" style="color: #FFF;">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" required>
        </div>
        <button type="submit" class="btn btn-light">Enviar</button>
    </form>
</div>
        </div>
        
        <div class= col-6>
    
        </div>
    </div>

    @include('footer')
</body>
</html>
