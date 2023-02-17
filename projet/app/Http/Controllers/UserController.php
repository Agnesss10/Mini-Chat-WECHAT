<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{
    public function showProfil(){
        return view('user.profil');
    }

    public function showParametres(){
        return view('user.parametres');
    }

    public function showFormEditInfos(){
        $id = Auth::id();
        return view('user.editInfos')->with('id', $id);
    }

    public function editInfos(Request $request, $id){
        $user = User::findOrFail($id);
        if ($request->has('Cancel')) {
            $request->session()->flash('state', 'Modification annulée !');
            return redirect(route('home'));
        } elseif ($request->has('Edit')) {
            $v = $request->validate(
                [
                    'newprenom' => 'required|string|max:30',
                    'newnom' => 'required|string|max:30',
                ]
            );
            $user->prenom = $v['newprenom'];
            $user->nom = $v['newnom'];
            $user->save();
            $request->session()->flash('state', 'Informations modifiées !');
            return redirect(route('home'));
        } else {
            return back()->with('state', 'Invalide !');
        }
    }
    public function showFormEditMdp(){
        $id = Auth::id();
        return view('user.editMdp')->with('id', $id);
    }

    public function editMdp(Request $request, $id){
        $user = User::findOrFail($id);
        if($request->has('Cancel')){
            $request->session()->flash('state', 'Modification annulée !');
            return redirect(route('home'));
        }elseif ($request->has('Edit')){
            if (Hash::check($request->mdp, $user->mdp)) {
                $request->validate([
                    'newmdp' => 'required|string|max:100',
                ]);
                $user->mdp = Hash::make($request->newmdp);
                $user->save();
                $request->session()->flash('state', 'Mot de passe modifié !');
            }
            return redirect(route('home'));
        }else{
            return back()->with('state', 'Invalide !');
        }
    }

}


