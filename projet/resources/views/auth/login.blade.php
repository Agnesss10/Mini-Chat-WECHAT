@extends('modele')

@section('title','WECHAT-Connexion')

@section('content')
    <style>
        body{
            background-color: #d9d9d9;
            color: black;
        }
        div{
            text-align: center;
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
    </style>
    <center>
    <body>

    <h4>DÉMARRER LA SESSION</h4>
    <form method="post" action="{{route('login')}}">
        <br>

        <div class="form-group row">
            <label for="pseudo"  class="col-sm-2 col-form-label">Pseudo</label>
            <div class="col-sm-10">
                <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" value="{{old('pseudo')}}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="mdp" class="col-sm-2 col-form-label">Mot de passe</label>
            <div class="col-sm-10">
                <input type="password" name="mdp" class="form-control" placeholder="Mot de passe">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </div>
        </div>

        @csrf <!--PROTECTION CSRF-->
    </form>

    </body>
    <footer>
        <br><br><br><br><br><br>

            <h4>INSCRIVEZ-VOUS</h4>
            <h8>SI VOUS N'AVEZ PAS ENCORE DE COMPTE D'UTILISATEUR DE WECHAT.COM, UTILISEZ CETTE OPTION POUR ACCÉDER AU FORMULAIRE D'INSCRIPTION.</h8>
            <div><a type="button" class="btn btn-primary" href="{{route('register')}}">Inscription</a></div>

    </footer>
    </center>
@endsection
