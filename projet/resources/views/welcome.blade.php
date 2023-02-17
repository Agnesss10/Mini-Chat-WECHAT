@extends('modele')

@section('title','WECHAT')

@section('content')
    <style>
        body{
            background-color: #d9d9d9;
            color: black;
        }
        div{
            text-align: center;
        }
    </style>

    <body>
    <div><a type="button" class="btn btn-primary" href="{{route('login')}}">Connexion</a></div>
    <br><br>
    <div><a type="button" class="btn btn-primary" href="{{route('register')}}">Inscription</a></div>

    </body>
@endsection
