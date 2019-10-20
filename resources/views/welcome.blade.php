<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Manipal Group</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
             body {
                
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
             margin: 0;
                
                
            }
            .navbar{
                width:100%;
                height:30px;
                color:#999;
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
            .navbar{
                width:100%;
                height:30px;
                color:#999;
            }

            
            .images-main{
                width:700px;
                height:700px;
                margin-left:320px;
                margin-top:30px;
                
            }
            .images{
                margin-left:100px;
                width:350px;
                height:350px;
            }
            .images-main h1{
                
                font-size:35px;
                color:#003f77;
               font-family:sans-serif;
               text-transform: uppercase;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links >a:hover{
                color:#000;
                font-size:18px;
            }
           
        </style>
    </head>
    <body>
    <div class="navbar">
        <div class=" position-ref ">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Admin Login</a>
                        <a href="{{ route('login') }}">User Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        
        </div>
        <div class="images-main">
            <img src="{{ asset('dist/img/image1th500th500.jpg') }}" class="images">
            <h1>Manipal Technologies Limited<h1>
        </div>
        
    </body>
</html>
