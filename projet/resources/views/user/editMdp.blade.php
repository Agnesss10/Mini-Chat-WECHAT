@extends('user.modele')

@section('title','WECHAT - Modifier mon mot de passe')

@section('content')
    <style>
        body{
            background-color: #d9d9d9;
            color: black;
        }
        h4{
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

    <body>
    <br>
    <h4>Modification de mon mot de passe</h4>
    <br>
    <form action="{{route('editMdp', ['id'=>$id])}}" method="post">
        <div class="form-group row">
            <label for="mdp" class="col-sm-2 col-form-label"> Mot de passe actuel </label>
            <div class="col-sm-10">
                <input type="password" name="mdp" class="form-control" placeholder="Mot de passe actuel">
            </div>
        </div>
        <div class="form-group row">
            <label for="mdp" class="col-sm-2 col-form-label"> Nouveau mot de passe </label>
            <div class="col-sm-10">
                <input type="password" name="newmdp" class="form-control" placeholder="Nouveau mot de passe">
            </div>
        </div>
        <div class="form-group row">
            <label for="mdp" class="col-sm-2 col-form-label"> Confirmation du mot de passe </label>
            <div class="col-sm-10">
                <input type="password" name="newmdp" class="form-control" placeholder="Confirmation du mot de passe">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" name="Edit" class="btn btn-primary">Modifier</button>
                <button type="submit" name="Cancel" class="btn btn-primary">Annuler</button>

            </div>
        </div>
        @csrf
    </form>
    </body>
@endsection
