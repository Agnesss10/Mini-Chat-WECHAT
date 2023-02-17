@extends('modele')

@section('title','Inscirption')

@section('content')
    <style>
        body{
            background-color: #d9d9d9;
            color: black;
        }
        form{
            text-align: center;
            margin-left: 300px;
        }
        .form-control{
            width: 50%;
        }
        button{
            width: 150px;
        }
        h1{
            text-align: center;
        }
    </style>
    <body>
    <center>

    <h4>Formulaire d'inscription</h4>
    <form action="{{route('register')}}" method="post">
        <div class="form-group row">
            <label for="pseudo" class="col-sm-2 col-form-label">Pseudo</label>
            <div class="col-sm-10">
                <input type="text" name="pseudo" class="form-control" placeholder="pseudo" value="{{old('pseudo')}}">
            </div>
        </div>

        <div class="form-group row">
            <label for="mdp" class="col-sm-2 col-form-label">Mot de passe</label>
            <div class="col-sm-10">
                <input type="password" name="mdp" class="form-control" placeholder="Mot de passe">
            </div>
        </div>

        <div class="form-group row">
            <label for="mdp_confirmation" class="col-sm-2 col-form-label">Confirmation Mot de passe</label>
            <div class="col-sm-10">
                <input type="password" name="mdp_confirmation" class="form-control" placeholder="Confirmation Mot de passe">
            </div>
        </div>

        <div class="form-group row">
            <label for="nom" class="col-sm-2 col-form-label">Nom</label>
            <div class="col-sm-10">
                <input type="text" name="nom" class="form-control" placeholder="Nom"  value="{{old('nom')}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="prenom" class="col-sm-2 col-form-label">Prénom</label>
            <div class="col-sm-10">
                <input type="text" name="prenom" class="form-control" placeholder="Prénom" value="{{old('prenom')}}">
            </div>
        </div>

        <div class="form-group row">
            <label for="num" class="col-sm-2 col-form-label">Numéro de téléphone</label>
            <div class="col-sm-10">
                <input type="text" name="num" class="form-control" placeholder="Numéro de téléphone" value="{{old('num')}}">
            </div>
        </div>

        <div class="form-group row">
            <label for="mail" class="col-sm-2 col-form-label">Adresse mail</label>
            <div class="col-sm-10">
                <input type="text" name="mail" class="form-control" placeholder="Adresse mail" value="{{old('mail')}}">
            </div>
        </div>
    <br>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">S'inscrire</button>
            </div>
        </div>
        @csrf <!--PROTECTION CSRF-->
    </form>

    </center>
    </body>

@endsection
