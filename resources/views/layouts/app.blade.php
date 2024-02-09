<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Ecole</title>
    <link rel="icon" href="https://cdn.worldvectorlogo.com/logos/hostinger.svg" type="image/x-icon">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap">
    <style>
body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            padding-top: 70px; 
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
            padding: 8px 20px;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }

        .logo img {
            height: 50px;
            width: auto;
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
            background-color: #ffffff;
            color: #044EFF;
        }

        .navbar a:active {
            background-color: #ffffff;
        }

        .main-content {
            padding: 20px;
        }

        header h1 {
            font-family: 'Pacifico', cursive;
            margin: 0;
            color: #0504aa;
        }
    </style>

        
</head>
<body>
    
    @include('navbar')

    <main class="py-4">
        @yield('content')
    </main>

    @include('footer')
</body>
</html>
