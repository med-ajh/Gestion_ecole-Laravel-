<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap">
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        .navbar {
            overflow: hidden;
            background-color: #044EFF;
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }

        .logo img {
            height: 50px;
            width: auto;
            filter: invert(1);
        }

        .navbar a {
            color: white;
            text-align: center;
            padding: 20px 25px;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
        }

        .navbar a:hover {
            background-color: #000000;
            color: #044EFF;
        }

        .navbar a:active {
            background-color: #f4f4f4;
        }

        .main-content {
            padding: 80px 20px 20px;
            margin-top: 60px;
            margin-right: 20px;
        }

        header h1 {
            font-family: 'Pacifico', cursive;
            margin: 0;
            color: #0504aa;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="logo">
            <a href="./"><img src="https://www.ensi.ma/wp-content/uploads/2019/05/logo-ENSI-1.png" alt="Ensi Logo"> </a>
        </div>
        <div class="menu-items">
        @guest
                            @if (Route::has('login'))
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif

                            @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest


            
        </div>
    </div>

    <div class="main-content">
    </div>

</body>
</html>
