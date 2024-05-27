<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Centre de Formation Continue</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-serif">
<header class="font-serif relative z-20 w-full border-b shadow-lg border-b-1 border-slate-200 bg-white/90 shadow-slate-700/5 after:absolute after:top-full after:left-0 after:z-10 after:block after:h-px after:w-full after:bg-slate-200 lg:border-slate-200 lg:backdrop-blur-sm lg:after:hidden">
    <div class="relative mx-auto max-w-full px-6 lg:max-w-5xl xl:max-w-7xl 2xl:max-w-[96rem]">
        @include('layouts.navigation')
    </div>
</header>
@if ($errors->any())
    <div role="alert" class="alert alert-error">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>{{ $errors->first() }}</span>
    </div>
@endif
<div class="pb-4">
    <h1 class="text-3xl font-bold text-center mt-8">Liste des Chefs Filieres</h1>
</div>
<div class="overflow-x-auto p-4">
    <button class="btn btn-info float-right py-4" id="addChefFiliere">
        Ajouter Un Chef de Filiere
    </button>
    <dialog id="ModelAddChefFiliere" class="modal">
        <div class="modal-box">
            <form action="{{ route('chefs.store') }}" method="post">
                @csrf
                <!-- Chef Name Input -->
                <div class="mb-4">
                    <label for="nom" class="block">Nom du Chef</label>
                    <input type="text" name="nom" class="input input-bordered w-full" required />
                </div>
                <div class="mb-4">
                    <label for="prenom" class="block">Prenom du Chef</label>
                    <input type="text" name="prenom" class="input input-bordered w-full" required />
                </div>
                <!-- Email Input -->
                <div class="mb-4">
                    <label for="email" class="block">Email</label>
                    <input type="email" name="email" class="input input-bordered w-full" required />
                </div>
                <!-- Password Input -->
                <div class="mb-4">
                    <label for="password" class="block">Mot de Passe</label>
                    <input type="password" name="password" class="input input-bordered w-full" required />
                </div>
                <!-- Filiere Selection -->
                <div class="mb-4">
                    <label for="filieres" class="block">Filiere</label>
                    <select name="filiere_id" class="select select-bordered w-full" required>
                        <option disabled selected>Choisissez une filiere</option>
                        @foreach($filieres as $filiere)
                            <option value="{{ $filiere->id }}">{{ $filiere->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Submit Form Input -->
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <button type="button" class="btn btn-secondary" id="closeDialog">Fermer</button>
                </div>
            </form>
        </div>
    </dialog>
    <table class="table">
        <!-- head -->
        <thead>
        <tr>
            <th>Chef Filiere</th>
            <th>Filiere</th>
            <th> Date Création</th>
            <th>Date Modification</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <!-- rows -->
        @foreach($chefs as $chef)
            <tr class="hover">
                <td>{{ $chef->user->nom }} {{ $chef->user->prenom }}</td>
                <td>{{ $chef->filiere->nom }}</td>
                <td>{{ $chef->created_at }}</td>
                <td>{{ $chef->updated_at }}</td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var dialog = document.getElementById('ModelAddChefFiliere');
        document.getElementById('addChefFiliere').addEventListener('click', function() {
            dialog.showModal();
        });
        document.getElementById('closeDialog').addEventListener('click', function() {
            dialog.close();
        });
    });
</script>
</body>
</html>
