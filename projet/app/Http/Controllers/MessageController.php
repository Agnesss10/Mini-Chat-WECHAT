<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MessageController extends Controller{
    public function showContacts(){
        $id = Auth::id();
        $contacts = DB::table('users')->where('id','!=',$id)->simplePaginate(10);
        return view('message.contacts')->with('contacts', $contacts);
    }

    public function getChat(Request $request, $id){
        $user = DB::table('messages')
            ->join('users', 'user_env_id','=','users.id')
            ->where('messages.user_env_id', '=', Auth::id())
            ->where('messages.user_rec_id','=', $id)
            ->orWhere('messages.user_env_id', '=', $id)
            ->where('messages.user_rec_id','=', Auth::id())
            ->select('users.id', 'users.pseudo','messages.message','messages.created_at', 'messages.user_rec_id')
            ->simplePaginate(10);
        return view('message.mini_chat')->with('user',$user)->with('id',$id);
    }

    public function envoi(Request $request, $id){
        $v = $request->validate([
            'message' => 'string|max:5000'
        ]);
        $m = new Message();
        $m->user_env_id = Auth::id();
        $m->user_rec_id = $id;
        $m->message = $v['message'];
        $m->save();

        return back()->with('state', 'Message envoyé !');
    }
}
