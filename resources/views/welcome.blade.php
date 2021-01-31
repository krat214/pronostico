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
        <div class="row mx-auto">
          <div class="col-12 col-sm-10 col-lg-6 py-4 my-auto mx-auto">
                <div class="container">
                    <div class="bg-white shadow py-3 px-4">
                      
                      <h1 class="display-5 text-primary">Pronostico <img src="/img/sun.gif" alt="" class="img-circle circle px-1"></h1>
                     
                        <form method="post" action="{{URL::to('doSearchWeather')}}">
                          @csrf
                          <div class="form-group">
                              <div class="form-group">
                                <div class="col-12 col-sm-auto col-lg-12">
                                  <select name="pronostico" class="form-control">
                                    <option value="Miami">Miami</option>
                                    <option value="Orlando">Orlando</option>
                                    <option value="New York">New York</option>
                                  </select>
                                </div>
                              </div>
                              
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Buscar</button>
                             
                            
                          </div>
                        </form>
                    </div>
                  </div>
                  <a class="btn btn-warning btn-lg btn-block my-3" href="{{ route('consulta') }}"> Ultimas Consultas </a>
              </div>
             
                             
            </div>
      </div>

      <footer class="bg-white text-center text-black-50 my-4 py-3">
        Pronostico Humedad| Derechos Reservados @ {{ date('Y') }} | Desarrollado por <a href="https://www.linkedin.com/in/angel-enrique-renteria-salamanca-31497346/" target="_blank">Angel Enrique Renteria Salamanca</a>
     </footer>
    </body>
</html>
