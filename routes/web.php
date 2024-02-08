<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthenticatedSessionController::class,'formulaireConnexion'])->middleware('throttle:10,1');
Route::post('/connexion', [AuthenticatedSessionController::class,'connexion'])->name('connexion');

Route::get('/inscription', [RegisterUserController::class,'formualaireInscription'])
    ->name('inscriptionForm');
Route::post('/inscription', [RegisterUserController::class,'inscription']) ->name('inscription');;

Route::middleware(['auth'])->group(function () {
    Route::get('/deconnexion', [AuthenticatedSessionController::class, 'deconnexion'])
        ->name('deconnexion');

    Route::get('/accueil', function () {
        if (auth()->check()) {
            return view('user.accueil');
        } else {
            return redirect('/');
        }
    })->name('accueil');
});
