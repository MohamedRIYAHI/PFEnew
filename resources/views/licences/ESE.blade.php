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
    <h1 class="absolute text-5xl font-serif leading-relaxed font-extrabold text-center text-blue-700">Energies Solaire et Eolienne</h1>
    <h3 class="absolute text-2xl font-serif text-white prof">Pr. Mohamed ABID</h3>
</div>
<header class="titre">
    <h1>PRÉ-INSCRIPTION</h1>
</header>
<div class="flex space-x-4 py-10">
    <div class="w-1/2 bg-transparent items-center justify-center flex border-2 border-sky-500 shadow-lg hover:bg-sky-500 text-sky-500 hover:text-white duration-300 cursor-pointer active:scale-[0.98]">
        {{--        if the auth have role candidat--}}
        @if(auth()->check() && Auth::user()->role === "candidat")
            <form action="{{ route("consultations.store",['candidat' => auth()->id(), 'filiere' => "Energies Solaire et Eolienne (ESE)"]) }}" method="POST">
                @csrf
                <button class="px-10 py-4"><a class="uppercase font-serif text-xl" >ENVOYER UNE DEMANDE</a></button>
            </form>
        @endif
        @if(auth()->check() && (Auth::user()->role === "chef_filiere" || Auth::user()->role === "admin"))
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
            <p>La licence professionnelle en Énergies Solaires et Éoliennes vise généralement à former des professionnels spécialisés dans le domaine des énergies renouvelables, en mettant l'accent sur les technologies solaires et éoliennes. Voici quelques-uns des objectifs typiques de ce programme :</p>
            <ol>
                <li><strong class="uppercase">Acquérir des connaissances techniques:</strong>Les étudiants apprennent les principes théoriques et pratiques des systèmes solaires et éoliens, y compris la conception, l'installation, la maintenance et le suivi.</li>
                <li><strong class="uppercase">Maîtriser les technologies spécifiques:</strong>Ils se familiarisent avec les différents types de technologies solaires (photovoltaïque, thermique) et éoliennes (éoliennes terrestres, offshore), ainsi que leurs composants et leur fonctionnement.</li>
                <li><strong class="uppercase">Comprendre les aspects environnementaux et économiques:</strong>Ils étudient l'impact environnemental de ces technologies, ainsi que leur viabilité économique, y compris les coûts de production, les tarifs d'achat, les subventions et les politiques de soutien.</li>
                <li><strong class="uppercase">Développer des compétences pratiques:</strong>Les étudiants acquièrent des compétences pratiques en matière d'installation, de maintenance et de dépannage des systèmes solaires et éoliens, ainsi que des compétences en gestion de projet.</li>
                <li><strong class="uppercase">Se familiariser avec la réglementation et les normes:</strong>Ils comprennent les réglementations nationales et internationales relatives à l'énergie solaire et éolienne, ainsi que les normes de qualité et de sécurité applicables.</li>
                </ol>
            <p>En résumé, la licence professionnelle en Énergies Solaires et Éoliennes vise à former des professionnels polyvalents capables de contribuer au développement, à l'installation et à la gestion efficace de systèmes d'énergie renouvelable, en répondant aux besoins du marché dans ce secteur en pleine croissance.</p>
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
<div class="bg-gray-100 text-gray-800">
<div class="max-w-4xl mx-auto p-6">

    <h1 class="text-2xl font-bold mb-4 text-blue-700">Programme de Licence en Énergies Solaires et Éoliennes</h1>

    <h2 class="text-xl font-semibold mb-2">Semestre 1 :</h2>
    <div class="overflow-x-auto">
        <table class="w-full bg-white border border-gray-200 rounded shadow-md">
            <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2">Module</th>
                <th class="px-4 py-2">Description</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="border px-4 py-2">Fondamentaux des énergies renouvelables</td>
                <td class="border px-4 py-2">Introduction aux énergies solaires et éoliennes. Aspects environnementaux et économiques.</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Technologies solaires et éoliennes</td>
                <td class="border px-4 py-2">Principes de base du photovoltaïque et de l'éolien. Types de cellules solaires et de turbines éoliennes.</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Génie électrique appliqué</td>
                <td class="border px-4 py-2">Conversion d'énergie. Intégration au réseau électrique.</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Réglementation et économie</td>
                <td class="border px-4 py-2">Politiques énergétiques. Analyse économique des projets.</td>
            </tr>
            </tbody>
        </table>
    </div>

    <h2 class="text-xl font-semibold my-6">Semestre 2 :</h2>
    <div class="overflow-x-auto">
        <table class="w-full bg-white border border-gray-200 rounded shadow-md">
            <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2">Module</th>
                <th class="px-4 py-2">Description</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="border px-4 py-2">Projets pratiques</td>
                <td class="border px-4 py-2">Conception et installation de systèmes solaires et éoliens. Études de cas sur des projets réels.</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Stage en entreprise</td>
                <td class="border px-4 py-2">Stage pratique dans une entreprise du secteur des énergies renouvelables.</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Communication professionnelle</td>
                <td class="border px-4 py-2">Techniques de présentation. Rédaction de rapports techniques.</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Séminaires et conférences</td>
                <td class="border px-4 py-2">Participation à des événements professionnels. Rencontres avec des experts du domaine.</td>
            </tr>
            </tbody>
        </table>
    </div>

</div>
</div>
<header class="titre">
    <h1>CONTACT</h1>
</header>
<div class="bg-gray-100">
    <div class="container mx-auto p-8">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <p class="text-gray-700"><span class="font-serif text-xl text-blue-700">Centre de Formation continue FSAC Casablanca</span></p>
            <p class="text-gray-700"><span class="font-bold">Responsable de la Licence:</span> Pr. Mohamed ABID</p>
            <p class="text-gray-700"><span class="font-bold">Téléphone:</span> <a href="">(+212) 0 00 00 00 00</a></p>
            <p class="text-gray-700"><span class="font-bold">Adresse :</span>Km 8 Route d'El Jadida, B.P 5366 Maarif Casablanca 20100 Maroc</p>
            <p class="text-gray-700"><span class="font-bold">Email:</span> <a href="mailto:Mohamed-ABID@gmail.com">Mohamed-ABID@gmail.com</a></p>
        </div>
    </div>
</div>
</body>
</html>
