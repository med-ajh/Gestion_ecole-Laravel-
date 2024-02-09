@extends('layouts.app')

@section('content')
<style>
    body {
        text-align: center;
        font-family: 'Poppins', sans-serif; /* Modern font */
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px; /* Add some padding for a cleaner look */
    }

    body {
        background-image: url('https://images.pexels.com/photos/2061168/pexels-photo-2061168.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    .content-container {
        background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); /* Box shadow for an elegant look */
        margin: 20px auto;
        max-width: 600px; /* Adjusted maximum width */
    }

    h2 {
        color: #333; /* Dark gray text color for elegance */
        font-size: 2.5em; /* Adjusted font size */
        margin: 20px 0; /* Add margin for spacing */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        transition: color 0.3s ease-in-out;
    }

    h2:hover {
        color: #ff7f00;
    }

    p {
        color: #555; /* Slightly darker text color for readability */
        font-size: 1.2em; /* Adjusted font size */
        margin: 10px 0; /* Add margin for spacing */
    }

    .last-info {
        margin-bottom: 20px; /* Add more space between the last info and the button */
    }

    a.btn-secondary {
        color: #fff; /* White text color */
        background-color: #044EFF; /* Button color */
        border: none;
        padding: 10px 15px;
        text-decoration: none;
        border-radius: 5px;
        font-size: 1em; /* Adjusted font size */
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    a.btn-secondary:hover {
        background-color: #022F5D; /* Hover color */
    }
</style>

<div class="content-container">
    <h2>Etudiant Details</h2>

    <p><strong>ID:</strong> {{ $etudiant->id }}</p>
    <p><strong>Nom:</strong> {{ $etudiant->nom }}</p>
    <p><strong>Prenom:</strong> {{ $etudiant->prenom }}</p>
    <p><strong>Sexe:</strong> {{ $etudiant->sexe }}</p>
    <p class="last-info"><strong>Filiere:</strong> {{ $etudiant->filiere->nom }}</p>

    <a href="{{ route('etudiants.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
