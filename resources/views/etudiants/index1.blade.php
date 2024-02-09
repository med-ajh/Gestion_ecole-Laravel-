@extends('layouts.app')

@section('content')
<style>
    body {
        text-align: center;
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
    }

    body {
  background-image: url('https://images.pexels.com/photos/267885/pexels-photo-267885.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

    h1 {
        color: #f4f4f4;
        padding: 20px;
        margin: 0;
        font-family: 'Georgia', serif;
        letter-spacing: 2px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        transition: color 0.3s ease-in-out;
    }

    h1:hover {
        color: #ff7f00;
    }

    table {
        border-collapse: collapse;
        width: 80%;
        margin: 20px auto;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        background-color: white;
        border-radius: 12px;
        overflow: hidden;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 15px;
        text-align: center;
    }

    th {
        background-color: #044EFF;
        color: white;
        text-transform: uppercase;
    }

    td {
        background-color: #f9f9f9;
    }

    table button {
        color: white;
        background-color: #f9f9f9;
        border: none;
        padding: 10px 15px;
        cursor: pointer;
        border-radius: 5px;
    }

    table a.edit,
    table a.delete,
    table a.show {
        color: #000000;
        text-decoration: none;
    }

    table a.edit:hover,
    table a.delete:hover,
    table a.show:hover {
        text-decoration: underline;
    }
</style>
    <h1>Listes des Etudiants</h1>



    <table class="table">
        <thead>

            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Sexe</th>
                <th>Filiere</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($etudiants as $etudiant)
                <tr>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

                    <td>{{ $etudiant->id }}</td>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->prenom }}</td>
                    <td>{{ $etudiant->sexe }}</td>
                    <td>{{ $etudiant->filiere->nom }}</td>
                        <td>
                        <a href="{{ route('etudiants.show', $etudiant->id) }}" class="edit"><i class="fas fa-eye"></i></a>
                        </td>






                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
