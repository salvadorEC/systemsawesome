<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sales Awesome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Allerta|Baloo|Lato&display=swap" rel="stylesheet">
        <!-- Styles -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
        /* texto animado*/
        @import url(https://fonts.googleapis.com/css?family=Signika:700,300,600);

        html, body { height: 100%; }
        body { display: flex; justify-content: center; align-items: center; margin:20px 0; text-align:center; background:beige; overflow:hidden; }

        h1 {
         font-size:5em;
         font:bold 7.5vw/1.6 'Signika';
         user-select:none;
        }

        h1 span { display:inline-block; animation:float .2s ease-in-out infinite; }
         @keyframes float {
          0%,100%{ transform:none; }
          33%{ transform:translateY(-1px) rotate(-2deg); }
          66%{ transform:translateY(1px) rotate(2deg); }
        }
        body:hover span { animation:bounce .6s; }
        @keyframes bounce {
          0%,100%{ transform:translate(0); }
          25%{ transform:rotateX(20deg) translateY(2px) rotate(-3deg); }
          50%{ transform:translateY(-20px) rotate(3deg) scale(1.1);  }
        }

        span:nth-child(4n) { color:hsl(0, 99%, 100%); text-shadow:1px 1px hsl(0, 6%, 16%); }
        span:nth-child(4n-1) { color:hsl(0, 99%, 100%); text-shadow:1px 1px hsl(0, 6%, 16%); }
        span:nth-child(4n-2) { color:hsl(0, 99%, 100%); text-shadow:1px 1px hsl(0, 6%, 16%); }
        span:nth-child(4n-3) { color:hsl(0, 99%, 100%); text-shadow:1px 1px hsl(0, 6%, 16%); }

        h1 span:nth-child(2){ animation-delay:.05s; }
        h1 span:nth-child(3){ animation-delay:.1s; }
        h1 span:nth-child(4){ animation-delay:.15s; }
        h1 span:nth-child(5){ animation-delay:.2s; }
        h1 span:nth-child(6){ animation-delay:.25s; }
        h1 span:nth-child(7){ animation-delay:.3s; }
        h1 span:nth-child(8){ animation-delay:.35s; }
        h1 span:nth-child(9){ animation-delay:.4s; }
        h1 span:nth-child(10){ animation-delay:.45s; }
        h1 span:nth-child(11){ animation-delay:.5s; }
        h1 span:nth-child(12){ animation-delay:.55s; }
        h1 span:nth-child(13){ animation-delay:.6s; }
        h1 span:nth-child(14){ animation-delay:.65s; }

        /* swing text */
        @-webkit-keyframes swing
        {
        15%
        {
        -webkit-transform: translateX(5px);
        transform: translateX(5px);
        }
        30%
        {
        -webkit-transform: translateX(-5px);
        transform: translateX(-5px);
        }
        50%
        {
        -webkit-transform: translateX(3px);
        transform: translateX(3px);
        }
        65%
        {
        -webkit-transform: translateX(-3px);
        transform: translateX(-3px);
        }
        80%
        {
        -webkit-transform: translateX(2px);
        transform: translateX(2px);
        }
        100%
        {
        -webkit-transform: translateX(0);
        transform: translateX(0);
        }
        }
        @keyframes swing
        {
        15%
        {
        -webkit-transform: translateX(5px);
        transform: translateX(5px);
        }
        30%
        {
        -webkit-transform: translateX(-5px);
        transform: translateX(-5px);
        }
        50%
        {
        -webkit-transform: translateX(3px);
        transform: translateX(3px);
        }
        65%
        {
        -webkit-transform: translateX(-3px);
        transform: translateX(-3px);
        }
        80%
        {
        -webkit-transform: translateX(2px);
        transform: translateX(2px);
        }
        100%
        {
        -webkit-transform: translateX(0);
        transform: translateX(0);
        }

        }
            html, body {
                background-image: linear-gradient(to bottom right, #FF416C, #FF4B2B);
                color: #fff;
                font-family: 'Fredoka One', cursive;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                text-shadow: 1px 1px 1px #541103;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #FFC7BC;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                font-family: 'Allerta', cursive;
            }
            a:hover {
                color: #fff;
              }

            .m-b-md {
                margin-bottom: 30px;
            }
            .card{
              text-shadow: 0px 0px 0px #000;
              font-family: 'Signika', cursive;
              font-weight: bold;
              font-size: 1.4em;
            }
            .text-top{
              color:hsl(0, 0%, 89%); text-shadow:1px 1px hsl(135, 35%, 55%), 2px 2px hsl(5, 99%, 69%), 3px 3px hsl(50, 45%, 45%), 4px 4px hsl(210, 99%, 63%);
            }
            .text-top:hover
              {
                -webkit-animation: swing 1s ease;
                animation: swing 1s ease;
                -webkit-animation-iteration-count: 1;
                animation-iteration-count: 1;

              }
            .card-body{
              font-family: 'Signika', cursive;
              font-weight: normal;
            }
            #tabletop{
              color: #000;
              text-shadow: 0px 0px 0px #000;
              font-weight: normal;
              font-size: .9em;
            }

            .card{
              border: 1px solid #fff; /* Color del borde, debe ser más claro que fondo */
              background:#fff; /* Fondo */
              border-radius: 6px;  /* Bordes redondos */
              box-shadow:inset 2px 2px 4px rgba(120, 120, 120, .4), inset -3px -3px 3px rgba(255,255,255,.4);
              text-shadow: 1px 1px rgba(0,0,0,0);  /* Sombra del texto */
              text-align: center;  /* Alineación del texto */
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Entrar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarme</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                  <h1> <span><i class="fas fa-shopping-bag"></i> </span> <span>S</span><span>a</span><span>l</span><span>e</span><span>s</span><span> </span><span>A</span><span>w</span><span>e</span><span>s</span><span>o</span><span>m</span><span>e</span></h1>
                </div>

                <div class="links">
                    <a href="#"><i class="fas fa-birthday-cake"></i> Postres</a>
                    <a href="#"><i class="fas fa-tshirt"></i> T-Shirts</a>
                    <a href="#"><i class="fas fa-gifts"></i> Gifts</a>
                </div>
                <br>
                <div class="card">
                    <div class="card-header"> <div class="text-top"><i class="fas fa-tag"></i> TOP</div></div>

                    <div class="card-body">
                      <table id="tabletop" class="table table-borderless table-sm">
                        <thead>
                          <tr>
                            <th scope="col">
                              <span class="text-user" style="font-size: 1em; color: #49A3FC;">
                                <i class="fas fa-user "></i>
                              </span>
                            </th>
                            <th scope="col">
                              <span class="text-bag" style="font-size: 1em; color: #2FC898;">
                                <i class="fas fa-shopping-bag"></i>
                              </span>
                            </th>
                            <th scope="col">
                              <span class="text-bag" style="font-size: 1em; color: #F3BE7A;">
                                <i class="fas fa-star"></i>
                              </span>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <td style="font-size: .9em;">
                                <div class="badge badge-dark text-wrap" style="width: 6rem;">
                                Mark
                                </div>
                              </td>
                            <td style="font-size: .9em;">
                              <div class="badge badge-dark text-wrap" style="width: 6rem;">
                                <i class="fas fa-tshirt" ></i> Marvel
                              </div>
                            </td>
                            <td style="font-size: .9em;">
                              <div class="badge badge-dark text-wrap" style="width: 6rem;">
                                5
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td style="font-size: .6em;">Jacob</td>
                            <td style="font-size: .6em;"><i class="fas fa-birthday-cake"></i> Cup/Tocino</td>
                            <td style="font-size: .6em;">5</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
