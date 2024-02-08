<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterUserController extends Controller
{
    public function formualaireInscription(){
        return view('inscription');
    }

    public function inscription(Request $request){
        $validator = Validator::make($request->all(), [
            'identifiant' => 'required|string|max:30|unique:users',
            'password' => [
                'required',
                'string',
                'confirmed',
                'min:6',
                'max:20',
                'regex:/^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]+$/',
            ],
        ], [
            'identifiant.required' => 'Veuillez entrer un identifiant.',
            'identifiant.max' => 'L\'identifiant ne peut pas dépasser :max caractères.',
            'identifiant.unique' => 'Cet identifiant est déjà utilisé. Veuillez en choisir un autre.',
            'password.required' => 'Veuillez entrer un mot de passe.',
            'password.string' => 'Le mot de passe doit être une chaîne de caractères.',
            'password.confirmed' => 'Les mots de passe ne correspondent pas.',
            'password.min' => 'Le mot de passe doit comporter au moins :min caractères.',
            'password.max' => 'Le mot de passe ne peut pas dépasser :max caractères.',
            'password.regex' => 'Le mot de passe doit contenir au moins une majuscule, un chiffre et un symbole parmi !@#$%^&*.',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            foreach ($errors->all() as $error) {
                flash($error)->error();
            }
            return redirect()->back()->withErrors($errors)->withInput();
        }

        $user = new User();
        $user->identifiant = $request->identifiant;
        $user->password = Hash::make($request->password);
        $user->save();

        flash('Inscription réalisée avec succès !')->success();
        return redirect('/');

    }
}
