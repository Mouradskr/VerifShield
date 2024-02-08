@extends('modele')

@section('title', 'Tu peux pas hack')
@section('content')
    <style>
        body {
            background-color: #010146;
            color:white;
        }

        form {
            text-align: center;
            margin-left: 10%;
            margin-right: 10%;
            margin-top: 10%;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 80%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            background-color: wheat;
            color: white;
            margin: auto;
        }

        button {
            width: 30%;
            padding: 10px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
        }

        button.btn-primary {
            background-color: #428bca;
            color: white;
        }

        button.btn-success {
            background-color: #5cb85c;
            color: white;
        }

        button.btn-dark {
            background-color: #d9534f;
            color: white;
        }
    </style>

    <body>
    <form method="post" action="{{route('connexion')}}">
        @csrf <!-- PROTECTION CSRF -->
        <div class="form-group">
            <label for="identifiant">Identifiant</label>
            <input type="text" name="identifiant" class="form-control" placeholder="Id" value="{{ old('identifiant') }}">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" class="form-control" placeholder="Mdp">
        </div>
        <div class="form-group">
            <button type="reset" class="btn btn-dark">Réinitialiser</button>
            <button type="submit" class="btn btn-primary">Soumettre</button>
            <button type="button" class="btn btn-success" onclick="window.location.href='{{ route('inscriptionForm') }}'">Inscription</button>
        </div>
    </form>
    </body>
@endsection
