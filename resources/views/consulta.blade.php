
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="/css/app.css">
      <link rel="shortcat icon" href="/img/sun.gif"> 
      <title>Pronostico </title>
    </head>
    <body >

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
<h1 class="display-4 mb-0 bg-white text-primary">Ultimas Consultas <img src="/img/sun.gif" alt="" class="img-circle circle px-1"></h1>
  
</div>
<ul class="list-group">
    @forelse ($consultas as $item)
        <li class="list-group-item border-0 mb-3 shadow-sm">
            <a class="d-flex justify-content-between align-items-center">
                <span class="text-black-50 font-weight-bold">
                    Ciudad: {{ $item->ciudad }}
                </span>
                <span class="text-black-50 font-weight-bold">
                  Humedad: {{ $item->humedad }}%
                </span>
                <span class="text-black-50 font-weight-bold">
                  Temperatura: {{ $item->temperatura }}°C
                </span>
                <span class="text-black-50 font-weight-bold">
                    Fecha de Consulta: {{ $item->created_at }}
                  </span>
                
            </a>
        </li>
    @empty
        <li class="list-group-item border-0 mb-3 shadow-sm">No hay Proyectos para mostrar</li>
    @endforelse
    {{ $consultas->links('pagination::bootstrap-4') }}
</ul>
<div class="d-flex justify-content-between align-items-center py-4">     
    <a class="btn btn-info" href="{{ route('welcome') }}"><i class="fas fa-chevron-circle-left"></i> Regresar</a>
</div>
</div>

<footer class="bg-white text-center text-black-50 my-4 py-3">
    Pronostico Humedad| Derechos Reservados @ {{ date('Y') }} | Desarrollado por <a href="https://www.linkedin.com/in/angel-enrique-renteria-salamanca-31497346/" target="_blank">Angel Enrique Renteria Salamanca</a>
 </footer>
</body>
</html>
