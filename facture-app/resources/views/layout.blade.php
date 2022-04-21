<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0px;
        }

        .btn-github {
            color: white;
            text-decoration: none;
            padding: 1em;
            margin: 1em;
            border-radius: 30px;
            background: #4a5568;
        }

        .login-github {
            margin: 10em 0px 0px 0px;;
            text-align: center;
        }
        .navbar {
            margin-bottom: 20px;
            background: #212529;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }
        .navbar-brand {
            color: #fff;
            padding-top: 0.3125rem;
            padding-bottom: 0.3125rem;
            margin-right: 1rem;
            font-size: 1.25rem;
            text-decoration: none;
            white-space: nowrap;
        }
        .container {
            display: flex;
            flex-wrap: inherit;
            align-items: center;
            justify-content: space-between;
            padding-left: 0.75rem;
        }
        .navbar-button {
            margin: 0;
            margin-right: 1.5em;
            text-decoration: none;
            color: #fff;
            font-family: inherit;
            line-height: inherit;
            background-color: transparent;
            border: 1px solid #fff;
            padding: 0.375em 0em;
            font-size: 1rem;
            border-radius: 0.25rem;
        }
        .navbar-button a {
            text-decoration: none;
            color: white;
            padding: 0.5em 1em 0.5em 1em;
        }
        .navbar-button a:hover {
            color: #212529;
            transition: 0.3s;
        }
        .navbar-button:hover {
            background-color: white;
            transition: 0.3s;

        }
        .register-container {
            text-align: center;
            padding: 1.5rem;
            border-radius: 0.25rem;
            border: 0.15em solid #dee2e6;
            width: 50%;
            margin: auto;

        }

    </style>
</head>
<body>
<header>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Home</a>
            <a class="navbar-brand" href="{{ url('/dashboard') }}">dashboard</a>
            @auth
                <button class="navbar-button" type="button">
                    <a href="{{ route('logout') }}">Déconnexion</a>
                </button>
            @else
                <button class="navbar-button" type="button">
                    <a href="{{ route('auth.login') }}">Se connecter</a>
                </button>
            @endif
        </div>
    </nav>
</header>
@yield('content')
</body>
</html>
