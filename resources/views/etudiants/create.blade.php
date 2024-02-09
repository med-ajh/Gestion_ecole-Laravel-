@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://images.pexels.com/photos/1114690/pexels-photo-1114690.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('https://r4.wallpaperflare.com/wallpaper/796/119/789/8k-nature-photo-wallpaper-93db637dfd490b752f56a217c85b4878.jpg') center/cover no-repeat;
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
        }

        form {
            display: flex;
            flex-direction: column;
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
</head>
<body>

<div class="container">
    <h1>Create Etudiant</h1>
    <form action="{{ route('etudiants.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" class="form-control" required>
        </div>



        <div class="form-group">
            <label for="sexe">Sexe</label>
            <select name="sexe" id="sexe" class="form-control" required>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>
        </div>

        <div class="form-group">
            <label for="filiere_id">Filiere</label>
            <select name="filiere_id" id="filiere_id" class="form-control">
                @foreach($filieres as $filiere)
                    <option value="{{ $filiere->id }}">{{ $filiere->nom }}</option>
                @endforeach
            </select>
        </div>

        <div class="btn-container">
            <input type="submit" value="Create Etudiant">
            <input type="button" value="Cancel" onclick="window.history.back()">
        </div>
    </form>
</div>

</body>
</html>

@endsection
