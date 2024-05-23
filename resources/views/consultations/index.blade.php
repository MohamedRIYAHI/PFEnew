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
<header class=" font-serif relative z-20 w-full border-b shadow-lg border-b-1 border-slate-200 bg-white/90 shadow-slate-700/5 after:absolute after:top-full after:left-0 after:z-10 after:block after:h-px after:w-full after:bg-slate-200 lg:border-slate-200 lg:backdrop-blur-sm lg:after:hidden">
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
    <h1 class="text-3xl font-bold text-center mt-8">Liste des Consultations</h1>

</div>
<div class="overflow-x-auto p-4">
    <table class="table">
        <!-- head -->
        <thead>
        <tr>
            <th>ID</th>
            <th>Candidat ID</th>
            <th>Filiere ID</th>

            @if(Auth::user()->role === "chef_filiere")
            <th>Verification</th>
            @endif
            <th>Status Verification</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <!-- rows -->
        @foreach($consultations as $consultation)
            <tr class="hover">
                <th>{{ $consultation->id }}</th>
                <td>{{ $consultation->candidat->user->nom }} {{ $consultation->candidat->user->prenom }}</td>
                <td>{{ $consultation->filiere->nom }}</td>
                @if(Auth::user()->role === "chef_filiere")
                <td>
                        <form action="{{ route('consultations.valider', $consultation->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-primary">Valider</button>
                        </form>

                        <form action="{{ route('consultations.rejeter', $consultation->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-danger">Rejeter</button>
                        </form>
                </td>
                @endif
                <td>
                    @if($consultation->verification === "en_attente")
                        <span class="text-yellow-500">{{ $consultation->verification }}</span>
                    @elseif($consultation->verification === "valide")
                        <span class="text-green-500">{{ $consultation->verification }}</span>
                    @else
                        <span class="text-red-500">{{ $consultation->verification }}</span>
                    @endif
                </td>
                <td>{{ $consultation->created_at }}</td>
                <td>{{ $consultation->updated_at }}</td>

                <td>
                    <a href="{{ route('consultations.show', $consultation->id) }}" class="btn btn-primary">Voir</a>
                    @if(Auth::user()->role === "candidat")


                        <form action="{{ route('consultations.destroy', $consultation->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    @endif

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
