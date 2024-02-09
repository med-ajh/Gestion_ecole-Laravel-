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
  background-image: url('https://images.pexels.com/photos/159740/library-la-trobe-study-students-159740.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
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
        text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.3);
        transition: color 0.3s ease-in-out;
    }

    h1:hover {
        color: #1900ff;
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
</head>
<body>
    <div style="text-align: center;">
        <h1 style=" padding: 20px; margin: 0; font-family: 'Georgia', serif; letter-spacing: 2px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); transition: color 0.3s ease-in-out; cursor: pointer;" onmouseover="this.style.color='#ff7f00'" onmouseout="this.style.color='#000000'">Listes des Filieres</h1>

        <table style="border-collapse: collapse; width: 80%; margin: 20px auto; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); background-color: white; border-radius: 12px; overflow: hidden;">
            <thead>
                <tr style="background-color: #044EFF; color: white; text-transform: uppercase;">
                    <th>ID</th>
                    <th>Nom</th>
                    <th colspan="1">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($filieres as $filiere)
                    <tr style="background-color: #f9f9f9;">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

                        <td>{{ $filiere->id }}</td>
                        <td>{{ $filiere->nom }}</td>
                        <td>
                            <a href="{{ route('filieres.show', $filiere->id) }}" class="show">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>




                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
@endsection
