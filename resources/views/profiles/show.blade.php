@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('https://r4.wallpaperflare.com/wallpaper/874/1005/109/5c1cf0c7860ec-wallpaper-23cbb3fdcd095b85bfa68247083bd858.jpg');
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .content-container {
            background-color: rgba(255, 255, 255, 0.7); /* Transparent white */
            padding: 50px; /* Increased padding */
            border-radius: 20px; /* Increased border radius */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 500px; /* Increased width */
            text-align: center;
            color: #000000; /* Black font color */
        }

        h2 {
            color: #000000;
            margin-bottom: 20px; /* Adjusted margin bottom */
            font-size: 34px; /* Adjusted font size */
            font-weight: bold; /* Added font weight */
        }

        p {
            margin-bottom: 30px; /* Increased margin bottom */
            font-size: 20px; /* Increased font size */
            color: #252424;
        }

        .btn-container {
            display: flex;
            justify-content: center; /* Center align buttons */
            margin-top: 30px;
        }

        .btn-edit {
            padding: 12px 30px; /* Increased padding */
            border-radius: 6px;
            font-size: 18px; /* Increased font size */
            text-decoration: none;
            color: #ffffff;
            background-color: #007bff;
            transition: background-color 0.3s;
            margin: 0 10px; /* Added margin between buttons */
        }

        .btn-edit:hover {
            background-color: #0056b3;
        }

        .btn-cancel {
            padding: 12px 30px; /* Increased padding */
            border-radius: 6px;
            font-size: 18px; /* Increased font size */
            text-decoration: none;
            color: #ffffff;
            background-color: #dc3545; /* Red color */
            transition: background-color 0.3s;
            margin: 0 10px; /* Added margin between buttons */
        }

        .btn-cancel:hover {
            background-color: #bd2130;
        }

        .fas {
            margin-right: 5px; /* Adjusted margin between icon and text */
        }
    </style>
</head>

<div class="content-container">
    <h2>User Information</h2>

    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>

    <div class="btn-container">
        <a href="{{ route('profile.editName') }}" class="btn-edit"><i class="fas fa-user-edit"></i></a>
        <a href="{{ route('profile.editEmail') }}" class="btn-edit"><i class="fas fa-envelope"></i></a>
        <a href="{{ route('profile.editPassword') }}" class="btn-edit"><i class="fas fa-lock"></i></a>
        <a href="/." class="btn-cancel"><i class="fas fa-times"></i></a>
    </div>
</div>
@endsection
