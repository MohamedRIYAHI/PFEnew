<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Afficher le formulaire d'inscription.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Gérer une demande d'inscription.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'nom_arabe' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'prenom_arabe' => ['required', 'string', 'max:255'],
            'lieu_naissance' => ['required', 'string', 'max:255'],
            'lieu_naissance_arabe' => ['required', 'string', 'max:255'],
            'date_naissance' => ['required', 'date'],
            'phone' => ['required', 'string', 'max:255'],
            'sexe' => ['required', 'string', 'max:255'],
            'cin' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'nom' => $validatedData['nom'],
            'nom_arabe' => $validatedData['nom_arabe'],
            'prenom' => $validatedData['prenom'],
            'prenom_arabe' => $validatedData['prenom_arabe'],
            'lieu_naissance' => $validatedData['lieu_naissance'],
            'lieu_naissance_arabe' => $validatedData['lieu_naissance_arabe'],
            'date_naissance' => $validatedData['date_naissance'],
            'phone' => $validatedData['phone'],
            'sexe' => $validatedData['sexe'],
            'cin' => $validatedData['cin'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
