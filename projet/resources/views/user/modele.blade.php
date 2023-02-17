<!DOCTYPE html>
<html lang="fr">
<style>
    html,body{
        background-color: #d9d9d9;
        color: black;
    }
</style>
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <img src="WECHAT.png"class="img-fluid" style="width: 15% " >


</head>
<body>

<nav class="navbar navbar-dark bg-light">
    <div class="container mt-3">

        <h4>Bienvenue {{ Auth::user()->pseudo}}</h4>
        <br>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="{{route('home')}}">Acceuil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="{{route('profil')}}">Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="{{route('parametres')}}">Paramètres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="{{route('contacts')}}">Messages</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="{{route('logout')}}">Déconnexion</a>
            </li>
        </ul>
    </div>
</nav>

{{--Message flash d'erreurs--}}
@if ($errors->any())
    <div class="alert alert-danger" role="alert" style="text-align: center">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{--Message flash--}}
@if( session()->has('state'))
    <div class="alert alert-info" role="alert" style="text-align: center">
        <p class="state">{{session()->get('state')}}</p>
    </div>
@endif
@if (session()->has('success'))
    <div class="alert alert-success alert-block" style="text-align: center">
        <strong>{{session()->get('success')}}</strong>
    </div>
@endif
@yield('content')
</body>

</html>
