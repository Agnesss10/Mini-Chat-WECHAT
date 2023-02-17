@extends('user.modele')

@section('title','WECHAT - Messages')

@section('content')

    <style>
        body{
            background-color: #d9d9d9;
            color: black;
        }
        .table{
            text-align: center;
            width: 50%;
        }
        form{
            width: 50%;
        }
    </style>

    <body>
    <center>
        <br><br>
        <h4>Messages</h4>
        <br>
        <table class="table table-sm table-hover">
            <thead class="table-light">
            <tr>
                <th>Utilisateur</th>
                <th>Message</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user as $c)
                <tr>
                    <td>{{$c->pseudo}}</td>
                    <td>{{$c->message}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <form action="{{route('envoi', ['id'=>$id])}}" method="post">
            <div class="col-auto">
                <input type="text" name="message" class="form-control" placeholder="Entrez votre message...">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                        <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                    </svg>
                </button>
            </div>
            @csrf
        </form>
    </center>
    </body>
@endsection
