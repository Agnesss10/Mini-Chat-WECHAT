@extends('user.modele')

@section('title','WECHAT - PROFIL')

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
    <h4>Mes informations</h4>
        <br>
    <table class="table table-secondary table-striped">
        <tr>
            <td>Nom</td>
            <td>{{Auth::user()->nom}}</td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td>{{Auth::user()->prenom}}</td>
        </tr>
        <tr>
            <td>Pseudo</td>
            <td>{{Auth::user()->pseudo}}</td>
        </tr>
        <tr>
            <td>Adresse mail</td>
            <td>{{Auth::user()->mail}}</td>
        </tr>
        <tr>
            <td>Numéro de téléphone</td>
            <td>{{Auth::user()->num}}</td>
        </tr>
        </tbody>
    </table>
    </center>
    </body>
@endsection
