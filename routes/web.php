<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaticController;
use App\Models\Filiere;
use App\Models\User;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $licences = Filiere::where('type', 'licence')->get();
    $masters = Filiere::where('type', 'master')->get();
    //$users = User::all();
    //dd(
        //$users->map->candidat
   // );
    return view('welcome',compact('licences','masters'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
route::get('/test',[StaticController::class,'formulaire']);
route::get('/fsjes',[StaticController::class,'fsjes']);
route::get('/test2',[StaticController::class,'test2']);
route::get('/test',[StaticController::class,'test']);





require __DIR__.'/auth.php';
