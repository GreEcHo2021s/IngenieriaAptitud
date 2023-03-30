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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-D5z+9aUHos5U2MgUJrl0+8DMq3bFCc/kjPZJ0EeVZhhtq3zBnydP3AbCm/NlL8cHwLJ7FImbSlkrPlZ7VQzPg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
         
</head>
@include('header')
<body>
    <div class="row">
        <div class="col-6">
        <div class="container">
        <div class="row">
        
            <div class="col-md-12">
                <h1>Bienvenido</h1>
                <p>Por favor complete el siguiente formulario:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="/procesar">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" required>
                    </div>
                    <div class="form-group">
                        <label for="padron">Padrón</label>
                        <input type="number" class="form-control" id="padron" name="padron" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                    </div>
                    <div class="form-group">
                    <label for="educacion_alcanzada">Educación Alcanzada:</label>
                        <select class="form-control" name="educacion_alcanzada" required>
                            <option value="">Seleccione una opción</option>
                            <option value="primaria">Primaria</option>
                            <option value="secundaria">Secundaria</option>
                            <option value="terciaria">Terciaria</option>
                            <option value="universitaria">Universitaria</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="area">Área</label>
                        <select class="form-control" id="area" name="area" required>
                            <option value="">Seleccione una opción</option>
                            <option value="area1">Área 1</option>
                            <option value="area2">Área 2</option>
                            <option value="area3">Área 3</option>
                        </select>
                    </div>
                    <div class="form-group" id="preguntas-area1" style="display: none;">
                        <label>Preguntas de Área 1:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pregunta1-area1" id="pregunta1-area1-opcion1" value="opcion1">
                            <label class="form-check-label" for="pregunta1-area1-opcion1">
                                Opción 1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pregunta1-area1" id="pregunta1-area1-opcion2" value="opcion2">
                            <label class="form-check-label" for="pregunta1-area1-opcion2">
                                Opción 2
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pregunta1-area1" id="pregunta1-area1-opcion3" value="opcion3">
                            <label class="form-check-label" for="pregunta1-area1-opcion3">
                                Opción 3
                            </label>
                        </div>
                    </div>
                    <div class="form-group" id="preguntas-area2" style="display: none;">
                        <label>Preguntas de Área 2:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pregunta1-area2" id="pregunta1-area2-opcion1" value="opcion1">
                            <label class="form-check-label" for="pregunta1-area2-opcion1">
                                Opción 1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pregunta1-area2" id="pregunta1-area2-opcion2" value="opcion2">
                            <label class="form-check-label" for="pregunta1-area2-opcion2">
                                Opción 2
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pregunta1-area2" id="pregunta1-area2-opcion3" value="opcion3">
                            <label class="form-check-label" for="pregunta1-area2-opcion3">
                                Opción 3
                            </label>
                        </div>
                    </div>
                    <div class="form-group" id="preguntas-area3" style="display: none;">
                        <label>Preguntas de Área 3:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pregunta1-area3" id="pregunta1-area3-opcion1" value="opcion1">
                            <label class="form-check-label" for="pregunta1-area3-opcion1">
                                Opción 1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pregunta1-area3" id="pregunta1-area3-opcion2" value="opcion2">
                            <label class="form-check-label" for="pregunta1-area3-opcion2">
                                Opción 2
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pregunta1-area3" id="pregunta1-area3-opcion3" value="opcion3">
                            <label class="form-check-label" for="pregunta1-area3-opcion3">
                                Opción 3
                            </label>
                        </div>
                        </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
        </div>
    <div class="col-6">
        

    </div>

    </div>
    

    <!-- Dependencias de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Dependencias de JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Código JavaScript -->
    <script>
        // Manejador de evento para el cambio de área
        $("#area").change(function() {
            // Obtenemos el valor seleccionado
            var area = $(this).val();
            // Ocultamos todas las preguntas
            $("#preguntas-area1").hide();
            $("#preguntas-area2").hide();
            $("#preguntas-area3").hide();
            // Mostramos las preguntas correspondientes al área seleccionada
            $("#preguntas-" + area).show();
        });
    </script>
    @include('footer')
</body>
</html>

                    
