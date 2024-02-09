@extends('layouts.app')

@section('content')
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
            font-size: 5ch
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form {
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
        }

        .form-group {
            margin-bottom: 20px;
        }





    .btn-primary {
        cursor: pointer;
            transition: background-color 0.3s;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            width: 100%;
            background-color: #044EFF;
            color: #ffffff;

    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-secondary {
        cursor: pointer;
            transition: background-color 0.3s;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            width: 92%;
            background-color: #FF0000;
            color: #ffffff;
    }

    .btn-secondary:hover {
        background-color: #B30000;    }

    .success-message {
        color: #28a745;
        margin-top: 10px;
        font-weight: bold;
        font-size: 2.5ch


    }

    .invalid-feedback {
        color: #dc3545;
        margin-top: 10px;
        font-weight: bold;
        font-size: 2.5ch


    }

</style>

<div class="container">
    <h1>Profile Details</h1>

    <form id="update-form" method="POST" action="{{ route('profiles.update', $user->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" required autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required>
            @error('email')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
            @error('password')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
            <span id="password-error" class="invalid-feedback" role="alert" style="display: none;">Passwords do not match.</span>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
        <a href="#" class="btn btn-secondary" id="cancel-btn">Cancel</a>
    </form>

    <div class="success-message" id="success-message" style="display: none;">
        Profile updated successfully!
    </div>
</div>

<script>
    document.getElementById('update-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission
        var form = this;

        // Check if passwords match
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('password_confirmation').value;
        if (password !== confirmPassword) {
            document.getElementById('password-error').style.display = 'block';
            return;
        }

        // Simulate a successful update
        // You should replace this with your actual update logic (e.g., AJAX request)
        setTimeout(function() {
            document.getElementById('success-message').style.display = 'block';
            form.reset(); // Reset the form fields
        }, 1000);
    });

    document.getElementById('cancel-btn').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default anchor behavior
        history.back(); // Go back to the previous page
    });
</script>
@endsection
