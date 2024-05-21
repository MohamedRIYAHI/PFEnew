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
    <img src="{{ asset('master.jpg') }}" class="image">
    <h1 class="absolute text-5xl font-serif leading-relaxed font-extrabold text-center text-blue-700">Génie Logistique</h1>
    <h3 class="absolute text-2xl font-serif text-white prof">Pr. Bahloul BENSASSI</h3>
</div>
<header class="titre">
    <h1>PRÉ-INSCRIPTION</h1>
</header>
<div class="flex space-x-4 py-10">
    <div class="w-1/2 bg-transparent items-center justify-center flex border-2 border-sky-500 shadow-lg hover:bg-sky-500 text-sky-500 hover:text-white duration-300 cursor-pointer active:scale-[0.98]">
        <button class="px-10 py-4"><a class="uppercase font-serif text-xl" href="http://pfe1.test/register">PRÉ-INSCRIPTION EN LIGNE</a></button>
    </div>
    <div class="w-1/2 bg-transparent items-center justify-center flex border-2 border-sky-500 shadow-lg hover:bg-sky-500 text-sky-500 hover:text-white duration-300 cursor-pointer active:scale-[0.98]">
        <button class="px-10 py-4"><a class="uppercase font-serif text-xl" href="#">COûT DE LA FORMATION : 30.000 DH</a></button>
    </div>
</div>

<div class="all">
    <header class="titre">
        <h1 class="font-serif">OBJECTIFS</h1>
    </header>
    <main class="font-serif">
        <section class="obj">
            <h2>Méthodes Professionnelles</h2>
            <p>Les objectifs d'un Master spécialisé en Génie Logistique peuvent varier légèrement en fonction de l'institution et du programme spécifique, mais voici généralement ce à quoi vous pouvez vous attendre :</p>
            <ol>
                <li><strong class="uppercase">Maîtrise des concepts de logistique :</strong>Le programme vise à fournir aux étudiants une compréhension approfondie des principes fondamentaux de la logistique, y compris la gestion de la chaîne d'approvisionnement, la gestion des stocks, la planification de la production, etc.</li>
                <li><strong class="uppercase">Utilisation des outils et technologies :</strong> Les étudiants apprennent à utiliser efficacement les outils et les technologies de pointe utilisés dans le domaine de la logistique, tels que les logiciels de gestion de la chaîne d'approvisionnement, les systèmes de suivi et de localisation des marchandises, les techniques de modélisation et de simulation, etc.</li>
                <li><strong class="uppercase">Analyse et optimisation des processus logistiques :</strong> L'objectif est d'enseigner aux étudiants comment analyser les processus logistiques existants, identifier les inefficacités et proposer des solutions pour les améliorer et les optimiser.</li>
                <li><strong class="uppercase">Gestion des opérations :</strong>Les étudiants apprennent les compétences nécessaires pour gérer efficacement les opérations logistiques au quotidien, y compris la planification des transports, la gestion des entrepôts, la coordination des activités de distribution, etc.</li>
                <li><strong class="uppercase">Gestion de la chaîne d'approvisionnement :</strong> Le programme couvre également la gestion de bout en bout de la chaîne d'approvisionnement, y compris la coordination des fournisseurs, la gestion des commandes, la gestion des retours, etc.</li>
                <li><strong class="uppercase">Développement des compétences en leadership et en gestion :</strong> En plus des compétences techniques, les programmes de Master en Génie Logistique visent souvent à développer les compétences en leadership et en gestion nécessaires pour diriger efficacement une équipe et prendre des décisions stratégiques dans un environnement logistique complexe.</li>
            </ol>
            <p>En résumé, un Master spécialisé en Génie Logistique vise à fournir aux étudiants les connaissances, les compétences et les outils nécessaires pour exceller dans le domaine complexe et en évolution rapide de la logistique.</p>
        </section>
    </main>
</div>
<header class="titre">
    <h1>MODALITÉS DE SÉLECTION</h1>
</header>
<div class="bg-gray-100 py-8 px-4 sm:px-0">
<div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4 text-blue-700">Modalités de sélection du Master Spécialisé en Génie Logistique</h1>

    <h2 class="text-xl font-bold mb-2">PUBLIC CIBLE :</h2>
    <p class="mb-6">L'inscription est ouverte à tous les candidats possédant une qualification académique répondant aux critères suivants :</p>
    <ul class="list-disc list-inside mb-6">
        <li>Diplôme de niveau bachelor ou équivalent dans le domaine du génie logistique, de la gestion de la chaîne d'approvisionnement, de l'ingénierie industrielle ou dans un domaine connexe.</li>
        <li>Maîtrise de la langue d'enseignement (français, anglais, etc.), attestée par un certificat officiel (TOEFL, IELTS, etc.) pour les candidats non natifs.</li>
        <li>Expérience professionnelle dans le domaine de la logistique ou des opérations est un atout apprécié mais non obligatoire.</li>
    </ul>

    <h2 class="text-xl font-bold mb-2">PROCÉDURES DE SÉLECTION :</h2>
    <ol class="list-decimal list-inside mb-6">
        <li class="mb-4">
            <h3 class="font-bold mb-2">Étude approfondie du dossier du candidat :</h3>
            <ul class="list-disc list-inside">
                <li>Évaluation des relevés de notes et des diplômes obtenus.</li>
                <li>Analyse des lettres de recommandation, des éventuels projets professionnels antérieurs et autres documents pertinents fournis par le candidat.</li>
                <li>Appréciation de la pertinence de l'expérience professionnelle, le cas échéant.</li>
            </ul>
        </li>
        <li>
            <h3 class="font-bold mb-2">Entretien oral devant un jury compétent :</h3>
            <ul class="list-disc list-inside">
                <li>Échange sur le parcours académique et professionnel du candidat.</li>
                <li>Discussion sur ses motivations, ses objectifs de carrière et sa compréhension du domaine de la logistique.</li>
                <li>Évaluation de ses compétences interpersonnelles, de sa capacité à travailler en équipe et à résoudre des problèmes.</li>
            </ul>
        </li>
    </ol>
</div>
</div>
<header class="titre">
    <h1>PROGRAMME</h1>
</header>
<div class="bg-gray-100 p-4">
<div class="max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold mb-4 text-blue-700">Programme de Génie Logistique</h1>
    <h2 class="text-xl font-semibold mb-2">Premier semestre</h2>
    <table class="w-full border-collapse border border-gray-200">
        <thead>
        <tr class="bg-gray-200">
            <th class="border border-gray-200 py-2 px-4">Module</th>
            <th class="border border-gray-200 py-2 px-4">Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Introduction au Génie Logistique</td>
            <td class="border border-gray-200 py-2 px-4">Ce module fournit une vue d'ensemble des concepts fondamentaux, des principes et des défis de la logistique moderne, en mettant l'accent sur l'importance de la gestion efficace des flux de marchandises et d'informations dans les entreprises et les organisations.</td>
        </tr>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Management des Opérations</td>
            <td class="border border-gray-200 py-2 px-4">Ce module se concentre sur les principes de base de la gestion des opérations, y compris la planification, l'organisation, la direction et le contrôle des processus de production et de prestation de services, en mettant l'accent sur l'optimisation des ressources et l'amélioration continue.</td>
        </tr>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Systèmes d'Information Logistique</td>
            <td class="border border-gray-200 py-2 px-4">Ce module explore les systèmes d'information utilisés dans la gestion logistique, y compris les technologies de l'information, les bases de données, les logiciels de gestion des stocks, les outils de planification de la chaîne d'approvisionnement, etc.</td>
        </tr>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Gestion de la Chaîne d'Approvisionnement</td>
            <td class="border border-gray-200 py-2 px-4">Ce module examine les principes et les techniques utilisés pour gérer efficacement la chaîne d'approvisionnement, y compris la planification stratégique, la gestion des fournisseurs, la gestion des flux de produits, la gestion des stocks et la coordination des activités logistiques.</td>
        </tr>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Logistique Internationale</td>
            <td class="border border-gray-200 py-2 px-4">Ce module se concentre sur les aspects spécifiques de la logistique liés au commerce international, y compris la gestion des douanes, le transport transfrontalier, la coordination des expéditions internationales et la gestion des risques liés aux opérations mondiales.</td>
        </tr>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Analyse des Données pour la Logistique</td>
            <td class="border border-gray-200 py-2 px-4">Ce module explore les techniques d'analyse des données utilisées pour optimiser les processus logistiques, y compris les méthodes statistiques, les modèles prédictifs, l'analyse de données volumineuses (Big Data) et les outils d'aide à la décision.</td>
        </tr>
        </tbody>
    </table>
</div>
</div>
<div class="bg-gray-100 p-4">
<div class="max-w-4xl mx-auto">
    <h1 class="text-2xl font-bold mb-4">Deuxième Semestre</h1>
    <table class="w-full border-collapse border border-gray-200">
        <thead>
        <tr class="bg-gray-200">
            <th class="border border-gray-200 py-2 px-4">Module</th>
            <th class="border border-gray-200 py-2 px-4">Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Optimisation des Réseaux Logistiques</td>
            <td class="border border-gray-200 py-2 px-4">Ce module examine les techniques d'optimisation utilisées pour concevoir et gérer efficacement les réseaux logistiques, y compris la localisation des installations, le routage des transports, la conception des réseaux de distribution, etc.</td>
        </tr>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Gestion des Stocks et des entrepôts</td>
            <td class="border border-gray-200 py-2 px-4">Ce module se concentre sur les principes de base de la gestion des stocks et des entrepôts, y compris les politiques de réapprovisionnement, les techniques de gestion des stocks, la conception des entrepôts, la gestion des commandes, etc.</td>
        </tr>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Logistique et Transport</td>
            <td class="border border-gray-200 py-2 px-4">Ce module examine les différents modes de transport utilisés dans la logistique, y compris le transport routier, ferroviaire, maritime, aérien et multimodal, ainsi que les défis liés à la planification, à l'optimisation et à la gestion des opérations de transport.</td>
        </tr>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Systèmes d'Information Géographique (SIG) pour la Logistique</td>
            <td class="border border-gray-200 py-2 px-4">Ce module explore l'utilisation des systèmes d'information géographique (SIG) dans la gestion logistique, y compris la cartographie, la planification des itinéraires, l'analyse spatiale et la gestion des actifs.</td>
        </tr>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Gestion des Risques dans la Chaîne Logistique</td>
            <td class="border border-gray-200 py-2 px-4">Ce module examine les différents types de risques auxquels sont confrontées les chaînes logistiques, y compris les risques opérationnels, financiers, géopolitiques et environnementaux, ainsi que les stratégies de gestion des risques.</td>
        </tr>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Projet de Recherche en Logistique</td>
            <td class="border border-gray-200 py-2 px-4">Ce module permet aux étudiants de mener une recherche indépendante sur un sujet pertinent en logistique, en appliquant les connaissances et les compétences acquises dans les modules précédents pour résoudre un problème réel ou explorer une question théorique.</td>
        </tr>
        </tbody>
    </table>
</div>
</div>
<div class="bg-gray-100 p-4">
<div class="max-w-4xl mx-auto">
    <h1 class="text-2xl font-bold mb-4">troisième Semestre</h1>
    <table class="w-full border-collapse border border-gray-200">
        <thead>
        <tr class="bg-gray-200">
            <th class="border border-gray-200 py-2 px-4">Module</th>
            <th class="border border-gray-200 py-2 px-4">Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Logistique Urbaine et Durable</td>
            <td class="border border-gray-200 py-2 px-4">Ce module se concentre sur les défis spécifiques de la logistique urbaine, en mettant l'accent sur la planification des livraisons en milieu urbain, la gestion des congestions et des émissions, ainsi que les solutions durables pour répondre aux besoins logistiques des zones urbaines tout en réduisant l'empreinte environnementale.</td>
        </tr>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Gestion des Opérations Portuaires</td>
            <td class="border border-gray-200 py-2 px-4">Ce module explore les opérations portuaires, y compris la gestion des quais, la manutention des conteneurs, le stockage des marchandises, la sécurité portuaire et la coordination des activités de transport maritime. Il examine également les défis et les opportunités liés à la gestion efficace des opérations dans les ports.</td>
        </tr>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Logistique Inverse et Gestion des Retours</td>
            <td class="border border-gray-200 py-2 px-4">Ce module traite de la logistique inverse, qui concerne le mouvement des produits du consommateur final vers le fabricant ou le détaillant, notamment dans le cas des retours, des réparations, du recyclage et de l'élimination des produits. Il examine les stratégies et les processus pour gérer efficacement les flux de retour.</td>
        </tr>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Supply Chain Finance</td>
            <td class="border border-gray-200 py-2 px-4">Ce module aborde les aspects financiers de la gestion de la chaîne d'approvisionnement, y compris le financement des opérations, la gestion du capital de roulement, le crédit fournisseur, les stratégies de tarification et les instruments financiers utilisés pour optimiser la performance financière de la chaîne logistique.</td>
        </tr>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Technologies de l'Information pour la Logistique Avancée</td>
            <td class="border border-gray-200 py-2 px-4">Ce module explore les dernières avancées en matière de technologies de l'information appliquées à la logistique, telles que l'Internet des objets (IoT), l'intelligence artificielle (IA), la blockchain, la robotique et l'automatisation, ainsi que leur impact sur l'efficacité opérationnelle et la prise de décision dans la chaîne logistique.</td>
        </tr>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Stage en Entreprise</td>
            <td class="border border-gray-200 py-2 px-4">Ce module offre aux étudiants l'opportunité de mettre en pratique les connaissances et les compétences acquises dans le programme au sein d'une entreprise réelle. Les étudiants travaillent sur des projets concrets sous la supervision de professionnels de la logistique, ce qui leur permet de développer une expérience pratique et des compétences professionnelles dans le domaine de la logistique.</td>
        </tr>
        </tbody>
    </table>
</div>
</div>
<div class="bg-gray-100 p-4">
<div class="max-w-4xl mx-auto">
    <h1 class="text-2xl font-bold mb-4">Quatrième Semestre</h1>
    <table class="w-full border-collapse border border-gray-200">
        <thead>
        <tr class="bg-gray-200">
            <th class="border border-gray-200 py-2 px-4">Module</th>
            <th class="border border-gray-200 py-2 px-4">Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Mémoire de Recherche</td>
            <td class="border border-gray-200 py-2 px-4">Offre aux étudiants l'opportunité de mener une recherche approfondie sur un sujet spécifique en logistique, sous la supervision d'un enseignant ou d'un chercheur. Les étudiants doivent rédiger un mémoire détaillé qui présente leurs recherches, leurs résultats et leurs conclusions.</td>
        </tr>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Séminaires Avancés en Génie Logistique</td>
            <td class="border border-gray-200 py-2 px-4">Propose des séminaires avancés sur des sujets spécialisés en génie logistique, tels que les dernières tendances technologiques, les meilleures pratiques de gestion et les études de cas de succès. Les étudiants ont l'occasion d'approfondir leur compréhension des domaines spécifiques de la logistique grâce à des discussions et des présentations interactives.</td>
        </tr>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Innovation et Stratégie en Logistique</td>
            <td class="border border-gray-200 py-2 px-4">Examine les stratégies d'innovation dans le domaine de la logistique, en mettant l'accent sur l'identification et l'exploitation des opportunités innovantes pour améliorer l'efficacité opérationnelle, réduire les coûts et créer de la valeur ajoutée pour les clients. Les étudiants apprennent à élaborer des stratégies innovantes pour relever les défis logistiques contemporains.</td>
        </tr>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Gestion de Projet Logistique</td>
            <td class="border border-gray-200 py-2 px-4">Se concentre sur les principes et les techniques de gestion de projet appliqués à la logistique. Les étudiants acquièrent des compétences en planification, en organisation, en coordination et en contrôle des projets logistiques, en mettant l'accent sur la livraison réussie des produits et des services dans les délais et les budgets impartis.</td>
        </tr>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Modélisation et Simulation en Logistique</td>
            <td class="border border-gray-200 py-2 px-4">Explore les méthodes de modélisation et de simulation utilisées pour analyser et optimiser les processus logistiques. Les étudiants apprennent à concevoir des modèles de simulation pour représenter des systèmes logistiques complexes, à collecter des données pertinentes et à interpréter les résultats des simulations pour prendre des décisions éclairées en matière de conception et d'optimisation.</td>
        </tr>
        <tr>
            <td class="border border-gray-200 py-2 px-4">Soutenance de Mémoire</td>
            <td class="border border-gray-200 py-2 px-4">Offre aux étudiants l'opportunité de présenter leur mémoire de recherche devant un comité d'évaluation composé de professeurs et de professionnels de la logistique. Les étudiants doivent défendre leurs recherches, répondre aux questions et fournir des explications sur leur travail de recherche.</td>
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
            <p class="text-gray-700"><span class="font-bold">Responsable de la master:</span> Pr. Bahloul BENSASSI</p>
            <p class="text-gray-700"><span class="font-bold">Téléphone:</span> <a href="">(+212) 0 00 00 00 00</a></p>
            <p class="text-gray-700"><span class="font-bold">Adresse :</span>Km 8 Route d'El Jadida, B.P 5366 Maarif Casablanca 20100 Maroc</p>
            <p class="text-gray-700"><span class="font-bold">Email:</span> <a href="mailto:Pr. Bahloul BENSASSI@gmail.com">Bahloul-BENSASSI@gmail.com</a></p>
        </div>
    </div>
</div>
</body>
</html>


