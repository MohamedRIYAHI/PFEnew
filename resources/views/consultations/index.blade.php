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
    <h1 class="text-3xl font-bold text-center mt-8">Liste des Candidatures</h1>

</div>
<div class="overflow-x-auto p-4">
    <table class="table">
        <!-- head -->
        <thead>
        <tr>
            <th>Candidat</th>
            <th>Filiere</th>

            @if(Auth::user()->role === "chef_filiere")
            <th>Verification</th>
            @endif
            <th>Status Verification</th>
            <th>Date Création</th>
            <th>Date Modification</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <!-- rows -->
        @foreach($consultations as $consultation)
            <tr class="hover">
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
                    @if(Auth::user()->role === "chef_filiere")
                        <!-- Open the modal using ID.showModal() method -->
                        <button class="btn" id="message">Envoyer Un Message</button>
                        <dialog id="ModelMessage" class="modal">
                            <div class="modal-box">
                                <form action="{{ route('messages.store') }}" method="post">
                                    @csrf
                                    <!-- Subject Form Input -->
                                    <div>
                                        <label for="subject">Subject</label>
                                        <input id="subject" class="block w-full mt-1" type="text" name="subject" value="{{ old('subject') }}">
                                    </div>

                                    <!-- Recipient Form Input -->
                                    <div class="mt-4">
                                        <label for="recipient_name">Recipient</label>
                                        <input id="recipient_name" class="block w-full mt-1" type="text" value="{{ $consultation->candidat->user->nom }} {{ $consultation->candidat->user->prenom }}" readonly>
                                    </div>

                                    <!-- Store recipient's ID -->
                                    <input id="recipient" type="hidden" name="recipient" value="{{ $consultation->candidat->user->id }}">

                                    <!-- Message Form Input -->
                                    <div class="mt-4">
                                        <label for="message">Message</label>
                                        <textarea name="message" rows="10" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('message') }}</textarea>
                                    </div>

                                    <!-- Submit Form Input -->
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="button" class="btn btn-secondary" id="closeDialog">Fermer</button>

                                    </div>

                                </form>
                            </div>
                        </dialog>
                    @endif
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var dialog = document.getElementById('ModelMessage');
        if (!dialog.showModal) {
            dialogPolyfill.registerDialog(dialog);
        }

        document.getElementById('message').addEventListener('click', function() {
            dialog.showModal();
        });
        document.getElementById('closeDialog').addEventListener('click', function() {
            dialog.close();
        });
    });

//     add button for close the dialog

</script>

</body>
</html>
