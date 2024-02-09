@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('https://r4.wallpaperflare.com/wallpaper/384/818/513/himalayas-mountains-landscape-nature-wallpaper-6826fde8a0307cb8800cf11ed822d47a.jpg') center/cover no-repeat;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h1 {
            color: #343a40;
            margin-bottom: 30px;
            font-size: 24px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            color: #495057;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 6px;
            box-sizing: border-box;
            width: 100%;
            font-size: 14px;
            background-color: rgba(255, 255, 255, 0.9);
            transition: border-color 0.3s;
        }

        input:focus {
            outline: none;
            border-color: #007bff;
        }

        .form-group {
            margin-bottom: 20px;
            width: 100%;
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        button[type="submit"], button[type="button"] {
            cursor: pointer;
            transition: background-color 0.3s;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            width: 48%;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        button[type="button"] {
            background-color: #dc3545;
            color: #ffffff;
        }

        button[type="button"]:hover {
            background-color: #bd2130;
        }
    </style>
</head>

<div class="container">
    <h1>Edit Email</h1>

    <form id="update-email-form" method="POST" action="{{ route('profile.update.email') }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="email">New Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            @error('email')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="btn-container">
            <button type="submit">Update</button>
            <button type="button" onclick="window.history.back()">Cancel</button>
        </div>
    </form>
</div>
@endsection
