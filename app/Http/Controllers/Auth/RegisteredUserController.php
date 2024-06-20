<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Candidat;
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
            'photo' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'cv' => ['required', 'file', 'mimes:pdf', 'max:2048'],
            'lettre_motivation' => ['required', 'file', 'mimes:jpeg,png,jpg,gif,svg,pdf', 'max:2048'],
            'file_derneier_diplome' => ['required', 'file', 'mimes:jpeg,png,jpg,gif,svg,pdf', 'max:2048'],
            'carteNT' => ['required', 'file', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'releve_note' => ['required', 'file', 'mimes:jpeg,png,jpg,gif,svg,pdf', 'max:2048'],
            'nom' => ['required', 'string', 'max:255'],
            'nom_arabe' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'prenom_arabe' => ['required', 'string', 'max:255'],
            'lieu_naissance' => ['required', 'string', 'max:255'],
            'date_naissance' => ['required', 'date'],
            'phone' => ['required', 'string', 'max:255'],
            'sexe' => ['required', 'string', 'max:255'],
            'cin' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'status' => ['required', 'string', 'max:255'],
            'annee_bac' => ['required', 'string', 'max:255'],
            'annee_diplome' => ['required', 'string', 'max:255'],
            'montion_bac' => ['required', 'string', 'max:255'],
            'moyenne_bac' => ['required', 'numeric', 'between:0,20'],
            'dernier_diplome' => ['required', 'string', 'max:255'],
            'serie_bac' => ['required', 'string', 'max:255'],
            'specialite' => ['required', 'string', 'max:255'],
            'nom_etab' => ['required', 'string', 'max:255'],
        ]);

        $photo = $request->file('photo');
        $photoName = $photo->getClientOriginalName();
        $photo->move(public_path('images'), $photoName);
        $validatedData['photo'] = $photoName;

        $cv = $request->file('cv');
        $cvName = $cv->getClientOriginalName();
        $cv->move(public_path('cv'), $cvName);
        $validatedData['cv'] = $cvName;

        $lettre_motivation = $request->file('lettre_motivation');
        $lettre_motivationName = $lettre_motivation->getClientOriginalName();
        $lettre_motivation->move(public_path('lettre_motivation'), $lettre_motivationName);
        $validatedData['lettre_motivation'] = $lettre_motivationName;

        // hadchi li zdt
        $file_derneier_diplome = $request->file('file_derneier_diplome');
        $file_derneier_diplomeName = $file_derneier_diplome->getClientOriginalName();
        $file_derneier_diplome->move(public_path('file_derneier_diplome'), $file_derneier_diplomeName);
        $validatedData['file_derneier_diplome'] = $file_derneier_diplomeName;


        $carteNT = $request->file('carteNT');
        $carteNTName = $carteNT->getClientOriginalName();
        $carteNT->move(public_path('carteNT'), $carteNTName);
        $validatedData['carteNT'] = $carteNTName;

        $releve_note = $request->file('releve_note');
        $releve_noteName = $releve_note->getClientOriginalName();
        $releve_note->move(public_path('releve_note'), $releve_noteName);
        $validatedData['releve_note'] = $releve_noteName;


        $user = User::create([
            'nom' => $validatedData['nom'],
            'nom_arabe' => $validatedData['nom_arabe'],
            'prenom' => $validatedData['prenom'],
            'prenom_arabe' => $validatedData['prenom_arabe'],
            'lieu_naissance' => $validatedData['lieu_naissance'],
            'date_naissance' => $validatedData['date_naissance'],
            'phone' => $validatedData['phone'],
            'sexe' => $validatedData['sexe'],
            'cin' => $validatedData['cin'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'photo' => $validatedData['photo'],
            'role' => 'candidat',
        ]);

        $candidat = Candidat::create([
            'status' => $validatedData['status'],
            'annee_bac' => $validatedData['annee_bac'],
            'montion_bac' => $validatedData['montion_bac'],
            'moyenne_bac' => $validatedData['moyenne_bac'],
            'dernier_diplome' => $validatedData['dernier_diplome'],
            'annee_diplome' => $validatedData['annee_diplome'],
            'serie_bac' => $validatedData['serie_bac'],
            'specialite' => $validatedData['specialite'],
            'nom_etab' => $validatedData['nom_etab'],
            'cv' => $validatedData['cv'],
            'lettre_motivation' => $validatedData['lettre_motivation'],
            'file_derneier_diplome' => $validatedData['file_derneier_diplome'],
            'carteNT' => $validatedData['cin'],
            'releve_note' => $validatedData['releve_note'],
            'user_id' => $user->id,
        ]);
        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('/');
    }

}
