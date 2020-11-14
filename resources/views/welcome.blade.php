<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

        .top-right links{
            
        }
            html, body {
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            body{
                background-image: url(image/bg-laravel.jpg);
                background-repeat: no-repeat;
                background-size: 100% ;
                width: 100%;
                height: 100%;
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
                top: 75%;
                left: 40%;
               
            }

            .content {
                text-align: center;
            }

           
            
            .text{
                position: relative;
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .text-content{
                color: #ffffff;
                width: 100%;
                font-size: 18px;
                position: relative;
                left: 70%;
                margin-top: 15%;
                letter-spacing: 20px;
                font-weight: 600;
                
                
            }
            .links > a {
               float: right;
                padding-left: 30px;
                color: #000000;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                transition: color .3s;
                
            }
            .links > a:hover {
               color: #ffffff;
                transition: color .3s;
                
            }


            .animasi::after{
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background-color: #ffffff;
            cursor: pointer;
            transition: width .3s;
            }

            .animasi:hover::after{
            width: 100%;
            transition: width .3s;
        }



            .m-b-md {
                color: #ffffff;
                position: relative;
                /* margin-bottom: 30%; */
                right: 35%;
                font-size: 120px;
                letter-spacing: 5px; 
                bottom: 40%;
                
                /* margin-bottom: 30px; */
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="animasi" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="animasi" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="animasi" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="text">

            <p class="text-content"> TRADE , SELL , SAVE </p>

            </div>

            <div class="content">
                <div class="title m-b-md">
                    CARTUSIAST
                </div>

              
            </div>
        </div>
    </body>
</html>
