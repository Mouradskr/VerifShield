<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function formulaireConnexion(){
        return view('connexion');
    }

    public function connexion(Request $request){

        $request->validate([
            'identifiant' => 'required|string|max:20',
            'password' => 'required|string|min:6|max:100'
        ]);

        $credentials = ['identifiant' => $request->input('identifiant'), 'password' => $request->input('password')];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            flash('Connecté avec succès !')->success();
            return redirect('/accueil')->with('user', Auth::user());
        }
        flash("Votre identifiant ou mot de passe n'est pas valide ! Veuillez remplir à nouveau le formulaire.")->error();
        return back();
    }

    public function deconnexion(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
