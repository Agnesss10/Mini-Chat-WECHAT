<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function showForm(){
        return view('auth.login');
    }

    public function login(Request $request){

        $request->validate([
            'pseudo' => 'required|string|max:30',
            'mdp' => 'required|string|max:100'
        ]);


        $credentials = ['pseudo' => $request->input('pseudo'), 'password' => $request->input('mdp')];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $request->session()->flash('success','Connexion aboutie ! ');

            return redirect('/homeUser');
        }

        return back()->withErrors([
            'pseudo' => 'Vos identifiants sont invalides !',
        ]);
    }

    // logout action
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        $request->session()->flash('success','Déconnexion réussie ! ');

        return redirect('/');
    }
}
