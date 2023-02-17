@extends('user.modele')

@section('title','WECHAT')

@section('content')
    <style>
        body{
            background-color: #d9d9d9;
            color: black;
        }
        #chat{
            margin-right: 300px;
            margin-left: 300px;
            margin-bottom: 50px;
            margin-top: 50px;
            background-color: #ADD8E6;
            border-radius: 10px;
        }
        #rec{
            width: auto;
            background-color: #f1d9d9;
            float: left;
            border-radius: 10px;

        }
        form{
            width: 50%;
        }
        #env{
            width: auto;
            float: right;
            border-radius: 10px;
            background-color: #24a0ed;
        }

    </style>
    <body>
    <div id="chat">
        @foreach($user as $c)
            @if($c->id == Auth::id())
                <div id="env">
                    <p>{{$c->pseudo}} - {{$c->message}}<br>
                        {{$c->created_at}}</p>

                </div>
                <p><br><br></p>
            @else
                <div id="rec">
                    <p>{{$c->pseudo}} - {{$c->message}}<br>
                        {{$c->created_at}}</p>
                </div>
                <p><br><br></p>
            @endif
        @endforeach
            <center>

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
                    <br><br>
                    @csrf
                </form>

                {{$user->links()}}
            </center>
    </div>



    </body>
@endsection
