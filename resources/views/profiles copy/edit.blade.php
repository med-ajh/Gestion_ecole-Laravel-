
@extends('layouts.app')

@section('content')
<style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('https://images.pexels.com/photos/1051425/pexels-photo-1051425.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2') center/cover no-repeat;
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
            color: #f8f8f8;
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            color: #f8f8f8;
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

        select {
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

        .btn-container {
            display: flex;
            justify-content: space-between;
        }

        input[type="submit"], input[type="button"] {
            cursor: pointer;
            transition: background-color 0.3s;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            width: 48%;
        }

        input[type="submit"] {
            background-color: #044EFF;
            color: #ffffff;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        input[type="button"] {
            background-color: #FF0000;
            color: #ffffff;
        }

        input[type="button"]:hover {
            background-color: #B30000;
        }
    </style>
    <h1>Edit Profile</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Profile') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('profile.update', $user->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Update Profile') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
