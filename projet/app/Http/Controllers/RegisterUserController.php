<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{
    public function showForm(){
        return view('auth.register');
    }

    public function store(Request $request){
        $request->validate([
            'pseudo' => 'required|string|max:30|unique:users',
            'mdp' => 'required|string|confirmed|max:100',
            'nom' => 'required|string|max:30',
            'prenom' => 'required|string|max:30',
            'num' => 'required|string|max:10|unique:users',
            'mail' => 'required|string|max:50|unique:users'
        ]);

        $user = new User();
        $user->pseudo = $request->pseudo;
        $user->mdp = Hash::make($request->mdp);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->num = $request->num;
        $user->mail = $request->mail;
        $user->save();

        return redirect('/')->with('success','Inscription réalisée avec succès !');

    }
}
