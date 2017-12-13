<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Front Card</title>
    </head>
    <body>
        <div class="">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="">
                <div class="">
                    <h1>Front Card</h1>
                </div>
            </div>
        </div>
    </body>
</html>
