@extends('modele')

@section('title','Tu peux pas hack')

@section('content')
    <style>
        body{
            background-color: #010146;
            color: white;
        }
    </style>
    <header>
        @auth()
            <button class="btn btn-danger" onclick="window.location.href='{{ route('deconnexion') }}'">Déconnexion</button>
        @endauth
    </header>
    <body>
    </body>
@endsection
