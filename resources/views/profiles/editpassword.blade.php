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
    <h2>Edit Password</h2>

    <form id="update-password-form" method="POST" action="{{ route('profile.updatePassword') }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="password">New Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm New Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
            <span id="password-error" class="invalid-feedback" role="alert" style="display: none;">Passwords must match and be at least 8 characters long.</span>
        </div>

        <div class="btn-container">
            <button type="submit">Update</button>
            <button type="button" onclick="window.history.back()">Cancel</button>
        </div>
    </form>
</div>

<script>
    document.getElementById('update-password-form').addEventListener('submit', function(event) {
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('password_confirmation').value;
        if (password.length < 8 || password !== confirmPassword) {
            event.preventDefault(); // Prevent form submission
            document.getElementById('password-error').style.display = 'block';
        } else {
            document.getElementById('password-error').style.display = 'none'; // Clear any previous error messages
        }
    });
</script>
@endsection
