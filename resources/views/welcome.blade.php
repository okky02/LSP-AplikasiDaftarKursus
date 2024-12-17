<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        *,::after,::before {
            box-sizing: border-box;
        }
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif;
        }

        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; 
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            position: relative;
            z-index: 1;
        }

        .auth-box {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            gap: 20px; 
            margin-top: 80px;
        }

        .auth-login-button {
            display: block;
            width: 200px; 
            padding: 10px;
            text-align: center;
            color: white;
            font-size: 40px;
            font-weight: bold;
            background-color: #ffd64f;
            border-radius: 50px;
            text-decoration: none;
            transition: transform 0.3s ease; 
        }

        .auth-box .auth-login-button:hover {
            background-color: #dbc817;
            transform: scale(1.1);
        }

        .auth-regist-button {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #dbc817;
            font-weight: bold;
            font-size: 20px;
            transition: transform 0.3s ease;
            text-decoration: none; 
        }

        .auth-box .auth-regist-button:hover{
            transform: scale(1.2);
        }
    </style>
</head>
<body class="font-sans antialiased">

    <!-- Background Image -->
    <img id="background" class="background" src="{{ asset('images/background.png') }}" alt="Background"/>

    <!-- Main Container -->
    <div class="container">
        <!-- Authentication Links -->
        <div class="auth-box">
            @if (Route::has('login'))
                <nav class="flex flex-col space-y-4">
                    @auth
                        {{-- <a href="{{ url('/dashboard') }}">Dashboard</a> --}}
                    @else
                        <div class="button-container">
                            <a href="{{ route('login') }}" class="auth-login-button">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="auth-regist-button">Register</a>
                            @endif
                        </div>
                    @endauth
                </nav>
            @endif
        </div>
        
    </div>
</body>
</html>
