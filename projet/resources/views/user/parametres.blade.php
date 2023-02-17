@extends('user.modele')

@section('title','WECHAT - PARAMETRES')

@section('content')

    <style>
        body{
            background-color: #d9d9d9;
            color: black;
        }
        .table{
            text-align: center;
            width: 30%;
        }
    </style>
    <body>
     <center>

        <br><br>
        <h4>Mes paramètres</h4>
        <br>
        <table class="table table-secondary table-striped">
            <tr>
                <td>Informations personnelles</td>
                <td><a type="button" class="btn btn-primary" href="{{route('editFormInfos')}}">MAJ</a></td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td><a type="button" class="btn btn-primary" href="{{route('editFormMdp')}}">MAJ</a></td>
            </tr>
            </tbody>
        </table>
        </center>
    </body>
@endsection
