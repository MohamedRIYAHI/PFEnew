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
        <nav aria-label="main navigation" class="flex h-[5.5rem] items-stretch justify-between font-medium text-slate-700" role="navigation">
            <!-- Brand logo -->
            <a id="Centre" aria-label="WindUI logo" aria-current="page" class="flex items-center gap-2 py-3 text-lg whitespace-nowrap focus:outline-none lg:flex-1" href="javascript:void(0)">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px"
                     viewBox="0 0 267 300" enable-background="new 0 0 267 300" xml:space="preserve">
                            <x-application-logo class="block w-auto text-gray-800 fill-current h-9" />
                        </svg>
                𝔽𝕊𝔸ℂ - ℂ𝕖𝕟𝕥𝕣𝕖 𝕕𝕖 𝔽𝕠𝕣𝕞𝕒𝕥𝕚𝕠𝕟 ℂ𝕠𝕟𝕥𝕚𝕟𝕦𝕖
            </a>
            <!-- Mobile trigger -->
            <button class="relative self-center order-10 block w-10 h-10 lg:hidden" aria-expanded="false" aria-label="Toggle navigation">
                <div class="absolute w-6 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <span aria-hidden="true" class="absolute block h-0.5 w-9/12 -translate-y-2 transform rounded-full bg-slate-900 transition-all duration-300"></span>
                    <span aria-hidden="true" class="absolute block h-0.5 w-6 transform rounded-full bg-slate-900 transition duration-300"></span>
                    <span aria-hidden="true" class="absolute block h-0.5 w-1/2 origin-top-left translate-y-2 transform rounbfdcded-full bg-slate-900 transition-all duration-300"></span>
                </div>
            </button>
            <!-- Navigation links -->
            <ul role="menubar" aria-label="Select page" class="invisible absolute top-0 left-0 z-[-1] ml-auto h-screen w-full justify-center overflow-hidden overflow-y-auto overscroll-contain bg-white/90 px-8 pb-12 pt-28 font-medium opacity-0 transition-[opacity,visibility] duration-300 lg:visible lg:relative lg:top-0 lg:z-0 lg:flex lg:h-full lg:w-auto lg:items-stretch lg:overflow-visible lg:bg-white/0 lg:px-0 lg:py-0 lg:pt-0 lg:opacity-100">
                <li role="none" class="flex items-stretch">
                    <a role="menuitem" aria-current="page" aria-haspopup="false" class="flex items-center gap-2 py-4 transition-colors duration-300 hover:text-blue-800 focus:text-blue-800 focus:outline-none focus-visible:outline-none lg:px-8" href="http://pfe1.test/"> <span>Acceuil</span></a>
                </li>
                <li role="none" class="flex items-stretch">
                    <a role="menuitem"  aria-haspopup="false" class="flex items-center gap-2 py-4 transition-colors duration-300 hover:text-blue-800 focus:text-blue-800 focus:outline-none focus-visible:outline-none lg:px-8" href="http://pfe1.test/#formations"> <span>Formations</span> </a>
                </li>
                @if (Route::has('login'))
                    @auth

                        <li role="none" class="flex items-stretch">
                            <a href="{{ url('/dashboard') }}" role="menuitem" aria-haspopup="false" class="flex items-center gap-2 py-4 transition-colors duration-300 hover:text-blue-800 focus:text-blue-800 focus:outline-none focus-visible:outline-none lg:px-8"> <span>Profile</span> </a>
                        </li>

                    @else

                        <li role="none" class="flex items-stretch">
                            <a href="{{ url('login') }}" role="menuitem" aria-haspopup="false" class="flex items-center gap-2 py-4 transition-colors duration-300 hover:text-blue-800 focus:text-blue-800 focus:outline-none focus-visible:outline-none lg:px-8"> <span>Login</span> </a>
                        </li>

                        @if (Route::has('register'))

                            <li role="none" class="flex items-stretch">
                                <a href="{{ url('register') }}" role="menuitem" aria-haspopup="false" class="flex items-center gap-2 py-4 transition-colors duration-300 hover:text-blue-800 focus:text-blue-800 focus:outline-none focus-visible:outline-none lg:px-8"> <span>Register</span> </a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </nav>
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
        <button class="px-10 py-4"><a class="uppercase font-serif text-xl" href="http://pfe1.test/register">PRÉ-INSCRIPTION EN LIGNE</a></button>
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
