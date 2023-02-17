@extends('user.modele')

@section('title','WECHAT - Modifier mes informations')

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
    <h4>Modification de mes informations personnelles</h4>
    <br>
    <form action="{{route('editInfos', ['id'=>$id])}}" method="post">
        <div class="form-group row">
            <label for="prenom" class="col-sm-2 col-form-label"> Prénom</label>
            <div class="col-sm-10">
                <input type="text" name="newprenom" class="form-control" placeholder="{{Auth::user()->prenom}}">
            </div>
        </div>

        <div class="form-group row">
            <label for="nom" class="col-sm-2 col-form-label"> Nom</label>
            <div class="col-sm-10">
                <input type="text" name="newnom" class="form-control" placeholder="{{Auth::user()->nom}}">
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
