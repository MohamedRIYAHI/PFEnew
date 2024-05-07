<?php

use App\Http\Controllers\ChefController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\MessagerieController;


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaticController;
use App\Models\Filiere;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $licences = Filiere::where('type', 'licence')->get();
    $masters = Filiere::where('type', 'master')->get();

    return view('welcome',compact('licences','masters'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/chefs/', [ChefController::class, 'index'])->name('chefs.index');
    Route::get('/chefs/create', [ChefController::class, 'create'])->name('chefs.create');
    Route::post('/chefs/', [ChefController::class, 'store'])->name('chefs.store');
    Route::get('/chefs/edit/{chef}', [ChefController::class, 'edit'])->name('chefs.edit');
    Route::put('/chefs/{chef}', [ChefController::class, 'update'])->name('chefs.update');
    Route::delete('/chefs/{chef}', [ChefController::class, 'destroy'])->name('chefs.destroy');

    Route::get('/filieres/', [FiliereController::class, 'index'])->name('filieres.index');
    Route::get('/filieres/create', [FiliereController::class, 'create'])->name('filieres.create');
    Route::post('/filieres/', [FiliereController::class, 'store'])->name('filieres.store');
    Route::get('/filieres/edit/{chef}', [FiliereController::class, 'edit'])->name('filieres.edit');
    Route::put('/filieres/{chef}', [FiliereController::class, 'update'])->name('filieres.update');
    Route::delete('/filieres/{chef}', [FiliereController::class, 'destroy'])->name('filieres.destroy');

    Route::get('/candidats/', [CandidatController::class, 'index'])->name('candidats.index');

    Route::get('/consultations/', [ConsultationController::class, 'index'])->name('consultations.index');
    Route::get('/consultations/create', [ConsultationController::class, 'create'])->name('consultations.create');
    Route::post('/consultations/', [ConsultationController::class, 'store'])->name('consultations.store');
    Route::get('/consultations/edit/{chef}', [ConsultationController::class, 'edit'])->name('consultations.edit');
    Route::put('/consultations/{chef}', [ConsultationController::class, 'update'])->name('consultations.update');
    Route::delete('/consultations/{chef}', [ConsultationController::class, 'destroy'])->name('consultations.destroy');



Route::group(['prefix' => 'messages', 'as' => 'messages'], function () {
    Route::get('/', [MessagerieController::class, 'index']);
    Route::get('create', [MessagerieController::class, 'create'])->name('.create');
    Route::post('/', [MessagerieController::class, 'store'])->name('.store');
    Route::get('{thread}', [MessagerieController::class, 'show'])->name('.show');
    Route::put('{thread}', [MessagerieController::class, 'update'])->name('.update');
    Route::delete('{thread}', [MessagerieController::class, 'destroy'])->name('.destroy');
});
route::get('/test',[StaticController::class,'formulaire']);
route::get('/fsjes',[StaticController::class,'fsjes']);
route::get('/test2',[StaticController::class,'test2'])->name('test2');
route::get('/test',[StaticController::class,'test'])->name('test');





});


require __DIR__.'/auth.php';
