
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="shortcat icon" href="/img/sun.gif"> 
    <title>Pronostico </title>
   
        <?php echo $mapa['map']['js']; ?>
  
</head>
<body>
    <div class="container">
        <div class="row mx-auto">
          <div class="col-12 col-sm-10 col-lg-6 py-4">
           
                <div class="bg-white shadow py-3 px-4">
                     <h1 class="display-5 text-primary">Pronostico</h1>
                    <div class="row mx-auto">
                        <div class="col-8 col-sm-10 col-lg-6">
                            <small><b>Ciudad:</b> {{ $data->location->city }}</small>
                            <br>
                            <small><b>Pais:</b> {{ $data->location->country }}</small>
                            <br>
                            <small><b>Humedad:</b> {{ $data->current_observation->atmosphere->humidity }}%</small>
                            <br>
                            <small><b>Temperatura:</b> {{ $data->current_observation->condition->temperature }}°C </small>
                            <br>
                            
                        </div>
                        <div class="col-5 col-sm-10 col-lg-6 ">
                            @foreach ($desc as $item)
                            @if($item->id == $data->current_observation->condition->code  )
                            <span class="text-primary fs-5 "><b>{{ $item->descripcion }}</b></span>
                            @endif
                            @endforeach
                            <br>
                            <img class="img-thumbail" src="/img/icon/{{$data->current_observation->condition->code }}.png" alt="">
                        </div>
                    </div>
                </div>
                     
          </div>
          <div class="col-12 col-sm-10 col-lg-4  py-3 px-1">
            <div class="bg-white shadow py-3 px-3"><?php echo $mapa['map']['html']; ?></div>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center py-4">     
            <a class="btn btn-info" href="{{ route('welcome') }}"><i class="fas fa-chevron-circle-left"></i> Regresar</a>
        </div>
    </div>

    

    <footer class="bg-white text-center text-black-50 py-3">
       Pronostico Humedad| Derechos Reservados @ {{ date('Y') }} | Desarrollado por <a href="https://www.linkedin.com/in/angel-enrique-renteria-salamanca-31497346/" target="_blank">Angel Enrique Renteria Salamanca</a>
    </footer>
</body>
</html>



