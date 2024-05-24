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
    <h1 class="absolute text-5xl font-serif leading-relaxed font-extrabold text-center text-blue-700">Informatique Médicale</h1>
    <h3 class="absolute text-2xl font-serif text-white prof">Pr. Said JAI ANDALOUSSI</h3>
</div>
<header class="titre">
    <h1>PRÉ-INSCRIPTION</h1>
</header>
<div class="flex space-x-4 py-10">
    <div class="w-1/2 bg-transparent items-center justify-center flex border-2 border-sky-500 shadow-lg hover:bg-sky-500 text-sky-500 hover:text-white duration-300 cursor-pointer active:scale-[0.98]">
        {{--        if the auth have role candidat--}}
        @if(auth()->check() && Auth::user()->role === "candidat")
            <form action="{{ route("consultations.store",['candidat' => auth()->id(), 'filiere' => "Informatique Médicale (IM)"]) }}" method="POST">
                @csrf
                <button class="px-10 py-4"><a class="uppercase font-serif text-xl" >ENVOYER UNE DEMANDE</a></button>
            </form>
        @endif
        @if(auth()->check())
            <a class="uppercase font-serif text-xl" href="{{ url('/') }}">PRÉ-INSCRIPTION EN LIGNE</a>
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
        <p>Une licence professionnelle en informatique médicale vise à former des professionnels capables de concevoir, développer, et gérer des systèmes d'information dans le domaine de la santé. Les objectifs spécifiques peuvent varier en fonction du programme et des besoins du marché, mais voici quelques objectifs généraux typiques :</p>
        <ol>
            <li><strong class="uppercase">Méthodes de développement logiciel:</strong> Enseigner les différentes méthodologies de développement logiciel, telles que le modèle en cascade, le développement agile (Scrum, Kanban), et les pratiques de développement DevOps. Mettre l'accent sur l'importance de l'itération, de la collaboration et de la livraison continue dans le contexte des applications médicales.</li>
            <li><strong class="uppercase">Gestion de projet:</strong>Former les étudiants aux principes de base de la gestion de projet, y compris la définition des objectifs, la planification des tâches, l'allocation des ressources, la gestion des risques et la gestion des parties prenantes. Insister sur l'importance de respecter les délais, les budgets et les exigences de qualité dans le contexte des projets informatiques médicaux.</li>
            <li><strong class="uppercase">Analyse des besoins et conception:</strong> Apprendre aux étudiants à recueillir et à analyser les besoins des utilisateurs finaux (médecins, infirmières, patients, etc.) et à traduire ces besoins en spécifications fonctionnelles et techniques pour les systèmes d'information médicale. Mettre l'accent sur la conception centrée utilisateur et la modélisation des processus métier.</li>
            <li><strong class="uppercase">Sécurité et confidentialité des données:</strong>Sensibiliser les étudiants aux enjeux de sécurité et de confidentialité des données de santé, et leur enseigner les meilleures pratiques en matière de protection des informations sensibles, telles que la cryptographie, l'authentification, l'autorisation et la conformité aux normes réglementaires (comme le RGPD dans l'Union européenne).</li>
            <li><strong class="uppercase">Intégration des normes et des standards:</strong> Familiariser les étudiants avec les normes et les standards de l'industrie de la santé, tels que HL7 (Health Level Seven), DICOM (Digital Imaging and Communications in Medicine) et FHIR (Fast Healthcare Interoperability Resources), et les aider à intégrer ces normes dans la conception et le développement des systèmes d'information médicale.</li>
            <li><strong class="uppercase">Tests et validation:</strong>Enseigner les techniques de test logiciel, y compris les tests unitaires, les tests d'intégration, les tests de système et les tests de validation, afin d'assurer la fiabilité, la sécurité et la conformité réglementaire des applications médicales.</li>
            <li><strong class="uppercase">Maintenance et support:</strong>Préparer les étudiants à assurer la maintenance et le support des systèmes d'information médicale après leur déploiement, en mettant l'accent sur la résolution efficace des problèmes, la gestion des mises à jour et des correctifs, et la fourniture d'un soutien technique aux utilisateurs finaux.</li>
        </ol>
        <p>Ces objectifs visent à former des professionnels polyvalents capables de répondre aux besoins croissants en informatique médicale, et de contribuer à l'amélioration des soins de santé grâce à l'innovation technologique.</p>
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

<div class="max-w-4xl mx-auto">

    <h1 class="text-2xl font-bold mb-4 text-blue-700">Programme de Licence en Informatique Médicale</h1>

    <!-- Premier Semestre -->
    <h2 class="text-xl font-bold mb-2">Premier Semestre</h2>
    <table class="w-full mb-8">
        <thead>
        <tr class="bg-gray-200">
            <th class="px-4 py-2">Modules</th>
            <th class="px-4 py-2">Contenu</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="border px-4 py-2">Introduction à l'Informatique Médicale</td>
            <td class="border px-4 py-2">Concepts de base, évolution, tendances</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">Systèmes d'Information Médicale</td>
            <td class="border px-4 py-2">Principes, architecture, études de cas</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">Sécurité et Confidentialité des Données</td>
            <td class="border px-4 py-2">Principes, conformité réglementaire, techniques</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">Applications Cliniques de l'Informatique Médicale</td>
            <td class="border px-4 py-2">Gestion des DME, télémédecine, applications mobiles</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">Analyse de Données Médicales</td>
            <td class="border px-4 py-2">Méthodes d'analyse, extraction de connaissances</td>
        </tr>
        </tbody>
    </table>

    <!-- Deuxième Semestre -->
    <h2 class="text-xl font-bold mb-2">Deuxième Semestre</h2>
    <table class="w-full">
        <thead>
        <tr class="bg-gray-200">
            <th class="px-4 py-2">Modules</th>
            <th class="px-4 py-2">Contenu</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="border px-4 py-2">Gestion de Projet en Informatique Médicale</td>
            <td class="border px-4 py-2">Principes, planification, études de cas</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">Normes et Réglementations en Informatique Médicale</td>
            <td class="border px-4 py-2">Normes DICOM, normes HL7, conformité réglementaire</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">Développement de Logiciels Médicaux</td>
            <td class="border px-4 py-2">Conception, codage, tests</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">Pratique Professionnelle en Informatique Médicale (Stage)</td>
            <td class="border px-4 py-2">Stage pratique, rapport de stage</td>
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
        <p class="text-gray-700"><span class="font-bold">Responsable de la Licence:</span> Pr. Said JAI ANDALOUSSI</p>
        <p class="text-gray-700"><span class="font-bold">Téléphone:</span> <a href="">(+212) 6 66 42 52 48</a></p>
        <p class="text-gray-700"><span class="font-bold">Adresse :</span>Km 8 Route d'El Jadida, B.P 5366 Maarif Casablanca 20100 Maroc</p>
        <p class="text-gray-700"><span class="font-bold">Email:</span> <a href="mailto:andaloussi.said@gmail.com">andaloussi.said@gmail.com</a></p>
    </div>
</div>
</div>
</body>
</html>
