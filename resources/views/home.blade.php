@extends('layouts.app')

@section('content')
    <body>
    <center>
      <style>
        body {
            background-image: url('https://images.pexels.com/photos/159213/hall-congress-architecture-building-159213.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
              }

              body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #000; /* Set your background color */
        }

        h1 {
            color: #fff; /* White text color */
            font-size: 6em; /* Adjust the font size as needed */
            text-align: center;
            font-family: 'Arial', sans-serif;
            position: relative;
            margin: 0;
            text-shadow: 0 0 15px #0077cc, 0 0 30px #0077cc, 0 0 45px #0077cc; /* Adjust the blue neon effect */
        }
      </style>
    <h1>Gestion D'école</h1>
    
</body>

@endsection
