<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preguntas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-D5z+9aUHos5U2MgUJrl0+8DMq3bFCc/kjPZJ0EeVZhhtq3zBnydP3AbCm/NlL8cHwLJ7FImbSlkrPlZ7VQzPg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
@include('header')
<body>
<div class="container">
    
        <h1>Preguntas</h1>
        
        <div class="form-group" id="selector2">
            <label for="selector">Selecciona una opción:</label>
            <select class="form-control" id="selector">
                <option selected disabled> Seleccione una opción </option>
                <option value="1">Opción 1</option>
                <option value="2">Opción 2</option>
                <option value="3">Opción 3</option>
            </select>
        </div>
        <div id="pregunta-container">

        </div>
            <h3 id="pregunta"></h3>
            <div class="form-group " id="prueba">
            <button id="respuesta-1" value= 1 class="btn btn-primary respuesta-btn" alt={{$id}}>En desacuerdo</button>
            <button id="respuesta-2" value= 2 class="btn btn-primary respuesta-btn" alt={{$id}}>Meh</button>
            <button id="respuesta-3" value= 3 class="btn btn-primary respuesta-btn" alt={{$id}}>Va</button>
            </div>
    </div>
</div>

    @include('footer')
</body>
</html>
<script>
  let preguntaIndex=0;
  // Función para mostrar la siguiente pregunta

  function mostrarPregunta() {
        let pregunta = Object.values(JSON.parse(localStorage.getItem('preguntas')))[0][preguntaIndex]['pregunta'];
        $('#pregunta-container').empty();
        $('#pregunta-container').html('<h2>' + pregunta + '</h2>');

    }
   
  
  let elemento = document.getElementById('selector');
  elemento.addEventListener('change',function(e){
  // Aquí va el código que quieres ejecutar después de que se haya cargado el DOM
    e.preventDefault();
    let elemento2 = document.getElementById('selector');
    console.log(preguntaIndex,elemento2.value);
    const pedido= fetch('/preguntas/' + e.target.value)
      .then(response => {
      if (!response.ok) {
        throw new Error('Error de red');
      }
        return response.json();
      })
      .then(data => {
        localStorage.setItem('preguntas', JSON.stringify(data));
        mostrarPregunta();
        $("#selector2").hide();
      })
      .catch(error => {
        console.log(error);
      });
   });
    
   elemento2= document.getElementById('prueba');
   // Función para guardar la respuesta en localStorage
   elemento2.addEventListener('click',function guardarRespuesta(e) {
      // Verificar si existe respuestas en el localStorage, bueno aca medio que si no existe lo crea
        var respuestas = JSON.parse(localStorage.getItem('respuestas')) || {};
      // Aca se viene todo el tratamiento de datos para mandar con el formato que quiero la respuestas
      // La idea es que cuando se haga click en algunos de los botones se active el evento y realize esta
      // función, con lo cual debería tener el valor que respondio
        // Aca va estar la información de la carrera, area de la pregunta
        valorespregunta=Object.values(JSON.parse(localStorage.getItem('preguntas')))[0][preguntaIndex];
        let prepraracion={pregunta: valorespregunta['id'], carrera: valorespregunta['carrera'] , area: valorespregunta['area'] , respuesta: e.target.alt }
        respuestas[preguntaIndex] = prepraracion;
        localStorage.setItem('respuestas', JSON.stringify(respuestas));
        preguntaIndex++;
        if(preguntaIndex>Object.values(JSON.parse(localStorage.getItem('preguntas')))[0].length){
        // Esto es medio la condición para ver si ya se terminarón de responder todas las preguntas
        // Se debería ejecutar el envio de información y que se muestren el análisis
        //Aca debería ir el idUsuario
        respuestas['idUsuario']= valoresquerespondio.attr();
        valoresquesemandan=JSON.stringify(respuestas);
        $.ajax({
          url: '{{ route('resultados.store') }}',
          method: 'POST',
          data: {valoresquesemandan, _token: '{{ csrf_token() }}'},
          success: function(response) {
              console.log('Datos enviados con éxito');
              console.log(response);
          },
          error: function(xhr, status, error) {
              console.error(error);
          }
          });

        }
        else{
        // Esto sería que hay que seguir mostrando la siguiente pregunta
         mostrarPregunta();
        }
      });
    </script>