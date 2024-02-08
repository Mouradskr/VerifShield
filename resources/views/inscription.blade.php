@extends('modele')

@section('title', 'Inscription ')
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
            background-color:wheat;
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
    <form action="{{ route('inscription') }}" method="post">
        <div class="form-group row">
            <label for="identifiant" class="col-sm-2 col-form-label">Identifiant</label>
            <div class="col-sm-10">
                <input type="text" name="identifiant" class="form-control" placeholder="Id" value="{{ old('identifiant') }}" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Mot de passe</label>
            <div class="col-sm-10">
                <input type="password" name="password" class="form-control" placeholder="Mdp" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="password_confirmation" class="col-sm-2 col-form-label">Confirmez le mot de passe</label>
            <div class="col-sm-10">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Mdp Confirmation" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Soumettre</button>
            </div>
        </div>
        @csrf <!--PROTECTION CSRF-->
    </form>
    </body>
@endsection
