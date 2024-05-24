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
<div class="cadre uppercase relative">
    <img src="{{ asset('7.jpeg') }}" class="image">
    <h1 class="absolute text-5xl font-serif leading-relaxed font-extrabold text-center text-blue-700">Génie Agroalimentaire</h1>
    <h3 class="absolute text-2xl font-serif text-white prof">Pr. Mohamed DAKIR</h3>
</div>
<header class="titre">
    <h1>PRÉ-INSCRIPTION</h1>
</header>
<div class="flex space-x-4 py-10">
    <div class="w-1/2 bg-transparent items-center justify-center flex border-2 border-sky-500 shadow-lg hover:bg-sky-500 text-sky-500 hover:text-white duration-300 cursor-pointer active:scale-[0.98]">
        {{--        if the auth have role candidat--}}
        @if(auth()->check() && Auth::user()->role === "candidat")
            <form action="{{ route("consultations.store",['candidat' => auth()->id(), 'filiere' => "Génie Agroalimentaire (GA)"]) }}" method="POST">
                @csrf
                <button class="px-10 py-4"><a class="uppercase font-serif text-xl" >ENVOYER UNE DEMANDE</a></button>
            </form>
        @endif
        @if(auth()->check() && Auth::user()->role === "chef_filiere" || Auth::user()->role === "admin")
            <a class="uppercase font-serif text-xl" href="{{ route('consultations.index') }}">PRÉ-INSCRIPTION EN LIGNE</a>
        @endif
        @if(!auth()->check())
            <a class="uppercase font-serif text-xl" href="{{ url('register') }}">PRÉ-INSCRIPTION EN LIGNE</a>
        @endif
    </div>
    <div class="w-1/2 bg-transparent items-center justify-center flex border-2 border-sky-500 shadow-lg hover:bg-sky-500 text-sky-500 hover:text-white duration-300 cursor-pointer active:scale-[0.98]">
        <button class="px-10 py-4"><a class="uppercase font-serif text-xl" href="#">COûT DE LA FORMATION : 25.000 DH</a></button>
    </div>
</div>
<div class="all">
    <header class="titre">
        <h1 class="font-serif">OBJECTIFS</h1>
    </header>
    <main class="font-serif">
        <section class="obj">
            <h2>Méthodes Professionnelles</h2>
            <p>La licence professionnelle en Génie Agroalimentaire vise à former des professionnels compétents dans le domaine de la transformation des produits alimentaires. Voici quelques-uns des objectifs généraux de ce programme :</p>
            <ol>
                <li><strong class="uppercase">Acquérir des compétences techniques :</strong>Les étudiants apprennent les techniques de transformation des produits alimentaires, allant de la récolte à la distribution. Cela inclut la manipulation, le traitement, la conservation et la distribution des aliments.</li>
                <li><strong class="uppercase">Maîtriser les normes de sécurité alimentaire :</strong> Les futurs professionnels doivent être familiers avec les réglementations nationales et internationales en matière de sécurité alimentaire. Cela inclut la gestion des risques microbiologiques, chimiques et physiques dans les aliments.</li>
                <li><strong class="uppercase">Comprendre les processus industriels :</strong>Les étudiants sont formés aux principes de base de la conception et du fonctionnement des installations de transformation alimentaire, y compris les équipements et les technologies utilisés.</li>
                <li><strong class="uppercase">Développer des compétences en gestion :</strong>Une partie importante du programme consiste à enseigner la gestion de la production, la gestion de la qualité et la gestion des ressources humaines dans le contexte de l'industrie agroalimentaire.</li>
                <li><strong class="uppercase">S'initier à la recherche et à l'innovation :</strong>Les étudiants sont encouragés à développer des compétences en recherche appliquée, en innovation et en développement de nouveaux produits alimentaires répondant aux besoins du marché.</li>
               </ol>
            <p>En résumé, la licence professionnelle en Génie Agroalimentaire vise à former des professionnels polyvalents capables de répondre aux défis techniques, réglementaires et commerciaux de l'industrie alimentaire.</p>
            </section>
    </main>
</div>
<header class="titre">
    <h1>MODALITÉS DE SÉLECTION</h1>
</header>
<div class="aa">
    <div class="ww">
        <h2 id="ww" class="uppercase text-2xl text-black font-serif">Public cible :</h2>
        <p>L'inscription est ouverte à tous les candidats possédant une qualification académique répondant aux critères suivants :</p>
        <ul class="font-serif">
            <li>Diplôme Universitaire de Technologie (DUT)</li>
            <li>Brevet de Technicien Supérieur (BTS)</li>
            <li>Diplôme de Technicien Spécialisé (DTS)</li>
            <li>Diplôme de Technicien (DT)</li>
            <li>Diplôme d'Études Universitaires Générales (DEUG)</li>
            <li>Diplôme d'Études Universitaires Professionnalisées (DEUP)</li>
            <li>Diplôme d'Études Universitaires Scientifiques et Techniques (DEUST)</li>
            <li>Tout diplôme équivalent reconnu (niveau Bac+2) ou supérieur.</li>
        </ul>
        <h2 class="uppercase text-2xl text-black py-4 font-serif">Procédures de sélection :</h2>
        <ol class="font-serif">
            <li>Étude approfondie du dossier du candidat.</li>
            <li>Entretien oral devant un jury compétent.</li>
        </ol>
    </div>
</div>
<header class="titre">
    <h1>PROGRAMME</h1>
</header>
<div class="bg-gray-100 p-8">
<div class="container mx-auto">
    <h2 class="text-2xl font-semibold mb-4">Premier Semestre :</h2>
    <table class="w-full table-auto">
        <thead>
        <tr>
            <th class="px-4 py-2 bg-gray-200 text-left">Module</th>
            <th class="px-4 py-2 bg-gray-200 text-left">Contenu</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="border px-4 py-2">Introduction au Génie Agroalimentaire</td>
            <td class="border px-4 py-2">Principes fondamentaux de l'ingénierie agroalimentaire, enjeux de l'industrie, normes de sécurité alimentaire.</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">Technologie Alimentaire</td>
            <td class="border px-4 py-2">Techniques de transformation des aliments : stérilisation, pasteurisation, déshydratation, fermentation, etc.</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">Qualité et Sécurité des Aliments</td>
            <td class="border px-4 py-2">Normes de qualité alimentaire, contrôle qualité, réglementations sanitaires.</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">Gestion de la Production</td>
            <td class="border px-4 py-2">Gestion de la production industrielle : planification, ordonnancement, contrôle.</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">Analyse Sensorielle</td>
            <td class="border px-4 py-2">Méthodes d'évaluation sensorielle des aliments : tests de dégustation, analyses sensorielles.</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">Anglais Professionnel</td>
            <td class="border px-4 py-2">Langue anglaise spécialisée : terminologie, communication professionnelle.</td>
        </tr>
        </tbody>
    </table>

    <h2 class="text-2xl font-semibold my-8">Deuxième Semestre :</h2>
    <table class="w-full table-auto">
        <thead>
        <tr>
            <th class="px-4 py-2 bg-gray-200 text-left">Module</th>
            <th class="px-4 py-2 bg-gray-200 text-left">Contenu</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="border px-4 py-2">Gestion de la Qualité</td>
            <td class="border px-4 py-2">Normes ISO, bonnes pratiques de fabrication (BPF), systèmes de management de la qualité.</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">Gestion de Projet</td>
            <td class="border px-4 py-2">Méthodes et outils de gestion de projet appliqués à l'agroalimentaire.</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">Technologies Émergentes</td>
            <td class="border px-4 py-2">Avancées technologiques récentes : nanotechnologie, biotechnologie, automatisation.</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">Stage en Entreprise</td>
            <td class="border px-4 py-2">Stage pratique en entreprise pour application des connaissances et immersion dans le secteur.</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">Projet de Fin d'Études</td>
            <td class="border px-4 py-2">Réalisation d'un projet de recherche ou de développement en groupe, suivi d'une soutenance.</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">Éthique et Développement Durable</td>
            <td class="border px-4 py-2">Réflexion sur les enjeux éthiques et environnementaux, pratiques durables et responsables.</td>
        </tr>
        </tbody>
    </table>
</div>
</div>
<header class="titre">
    <h1>CONTACT</h1>
</header>
<div class="bg-gray-100">
    <div class="container mx-auto p-8">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <p class="text-gray-700"><span class="font-serif text-xl text-blue-700">Centre de Formation continue FSAC Casablanca</span></p>
            <p class="text-gray-700"><span class="font-bold">Responsable de la Licence:</span> Pr. Mohamed DAKIR</p>
            <p class="text-gray-700"><span class="font-bold">Téléphone:</span> <a href="">(+212) 0 00 00 00 00</a></p>
            <p class="text-gray-700"><span class="font-bold">Adresse :</span>Km 8 Route d'El Jadida, B.P 5366 Maarif Casablanca 20100 Maroc</p>
            <p class="text-gray-700"><span class="font-bold">Email:</span> <a href="mailto:Mohamed-DAKIR@gmail.com">Mohamed-DAKIR@gmail.com</a></p>
        </div>
    </div>
</div>
</body>
</html>

