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
    <img src="{{ asset('master.jpg') }}" class="image">
    <h1 class="absolute text-5xl font-serif leading-relaxed font-extrabold text-center text-blue-700 mx-4">Electronique, Electrotechnique, Automatique et Informatique Industrielle</h1>
    <h3 class="absolute text-2xl font-serif text-white prof">Pr. Bahloul BENSASSI</h3>
</div>
<header class="titre">
    <h1>PRÉ-INSCRIPTION</h1>
</header>
<div class="flex space-x-4 py-10">
    <div class="w-1/2 bg-transparent items-center justify-center flex border-2 border-sky-500 shadow-lg hover:bg-sky-500 text-sky-500 hover:text-white duration-300 cursor-pointer active:scale-[0.98]">
        {{--        if the auth have role candidat--}}
        @if(auth()->check() && Auth::user()->role === "candidat")
            <form action="{{ route("consultations.store",['candidat' => auth()->id(), 'filiere' => "Electronique, Electrotechnique, Automatique et Informatique Industrielle (EEAII)"]) }}" method="POST">
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
            <p>Les objectifs d'un master spécialisé en Electronique, Electrotechnique, Automatique et Informatique Industrielle peuvent varier selon l'institution et le programme spécifique, mais voici généralement ce à quoi vous pouvez vous attendre :</p>
            <ol>
                <li><strong class="uppercase">Maîtrise des Fondamentaux :</strong>Acquérir une solide compréhension des principes fondamentaux de l'électronique, de l'électrotechnique, de l'automatique et de l'informatique industrielle.</li>
                <li><strong class="uppercase">Technologies Avancées :</strong>Se familiariser avec les technologies avancées utilisées dans ces domaines, telles que les systèmes embarqués, les réseaux de capteurs, les systèmes de contrôle avancés, etc.</li>
                <li><strong class="uppercase">Conception et Développement :</strong>Apprendre à concevoir, développer et mettre en œuvre des systèmes électroniques, électrotechniques, automatiques et informatiques industriels.</li>
                <li><strong class="uppercase">Analyse et Modélisation :</strong>Acquérir des compétences pour analyser et modéliser des systèmes complexes, ainsi que pour résoudre des problèmes d'ingénierie dans ces domaines.</li>
                <li><strong class="uppercase">Gestion de Projet :</strong>Développer des compétences en gestion de projet pour pouvoir gérer efficacement des projets d'ingénierie dans un environnement industriel.</li>
                <li><strong class="uppercase">Normes et Réglementations :</strong>Comprendre les normes et réglementations industrielles pertinentes dans le domaine de l'électronique, de l'électrotechnique, de l'automatique et de l'informatique industrielle.</li>
                <li><strong class="uppercase">Applications Industrielles :</strong>Explorer les applications industrielles de ces technologies dans des domaines tels que l'automatisation des processus, la robotique industrielle, les systèmes de contrôle de la production, etc.</li>
                <li><strong class="uppercase">Innovation et Recherche :</strong>Encourager l'innovation et la recherche dans ces domaines pour développer de nouvelles technologies et améliorer les solutions existantes.</li>
            </ol>
            <p>En résumé, un master spécialisé dans ce domaine vise à fournir aux étudiants les connaissances, les compétences et les outils nécessaires pour réussir dans l'industrie de l'électronique, de l'électrotechnique, de l'automatique et de l'informatique industrielle.</p>
        </section>
    </main>
</div>
<header class="titre">
    <h1>MODALITÉS DE SÉLECTION</h1>
</header>
<div class="bg-gray-100 py-8 px-4">
<div class="max-w-4xl mx-auto">
    <h2 class="text-xl font-bold mb-4">PUBLIC CIBLE :</h2>
    <p class="mb-4">L'inscription est ouverte à tous les candidats possédant une qualification académique répondant aux critères suivants :</p>
    <ul class="list-disc pl-6 mb-6">
        <li>Être titulaire d'une licence ou équivalent dans un domaine pertinent tel que l'électronique, l'électrotechnique, l'automatique, l'informatique industrielle ou tout domaine connexe.</li>
        <li>Avoir obtenu un résultat satisfaisant lors des années précédentes d'études universitaires.</li>
    </ul>

    <h2 class="text-xl font-bold mb-4">PROCÉDURES DE SÉLECTION :</h2>
    <h3 class="text-lg font-bold mb-2">Étude approfondie du dossier du candidat :</h3>
    <ul class="list-disc pl-6 mb-4">
        <li>Les candidats doivent soumettre un dossier comprenant leurs relevés de notes, leur CV, une lettre de motivation et toute autre documentation pertinente.</li>
        <li>Les critères d'évaluation du dossier peuvent inclure la pertinence des études antérieures, les notes obtenues dans les matières clés, les expériences professionnelles et extra-académiques pertinentes, ainsi que la qualité de la lettre de motivation.</li>
    </ul>

    <h3 class="text-lg font-bold mb-2">Entretien oral devant un jury compétent :</h3>
    <ul class="list-disc pl-6 mb-4">
        <li>Les candidats présélectionnés seront invités à passer un entretien oral avec un jury composé de professeurs et de professionnels du domaine.</li>
        <li>L'entretien permettra d'évaluer les compétences académiques, les motivations du candidat, sa compréhension du domaine, ainsi que sa capacité à s'intégrer au programme.</li>
        <li>Des questions techniques et conceptuelles peuvent être posées pour évaluer la compréhension approfondie du candidat dans les domaines de l'électronique, de l'électrotechnique, de l'automatique et de l'informatique industrielle.</li>
    </ul>
</div>
</div>
<header class="titre">
    <h1>PROGRAMME</h1>
</header>
<div class="bg-gray-100 py-8 px-4">
<div class="max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold mb-6">Premier Semestre</h1>

    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300">
            <thead class="bg-gray-200">
            <tr>
                <th class="border border-gray-300 px-4 py-2">Module</th>
                <th class="border border-gray-300 px-4 py-2">Description</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Fondements de l'électronique</td>
                <td class="border border-gray-300 px-4 py-2">Ce module introduit les principes fondamentaux de l'électronique, y compris les composants électroniques, les circuits analogiques et numériques, ainsi que les techniques de conception.</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Systèmes électriques et électrotechnique</td>
                <td class="border border-gray-300 px-4 py-2">Ce module couvre les concepts de base des systèmes électriques, y compris la génération, la transmission et la distribution de l'électricité, ainsi que les principes de l'électrotechnique et des machines électriques.</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Automatique linéaire</td>
                <td class="border border-gray-300 px-4 py-2">Ce module explore les concepts de base de la théorie de la commande automatique, en mettant l'accent sur les systèmes linéaires, les techniques de modélisation et les méthodes de conception de régulateurs.</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Programmation avancée en C/C++</td>
                <td class="border border-gray-300 px-4 py-2">Ce module approfondit les compétences en programmation en se concentrant sur les langages C et C++, en mettant l'accent sur les applications pratiques dans le domaine de l'électronique et de l'automatique.</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Traitement du signal</td>
                <td class="border border-gray-300 px-4 py-2">Ce module introduit les techniques de base du traitement du signal, y compris l'analyse spectrale, la convolution, la transformée de Fourier et leurs applications dans le domaine de l'électronique et de la communication.</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Projet pratique : Conception de circuits électroniques</td>
                <td class="border border-gray-300 px-4 py-2">Ce projet pratique permet aux étudiants d'appliquer les connaissances acquises dans les modules précédents pour concevoir, simuler et fabriquer des circuits électroniques simples.</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<div class="bg-gray-100 py-8 px-4">
<div class="max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold mb-6">Deuxième Semestre</h1>

    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300">
            <thead class="bg-gray-200">
            <tr>
                <th class="border border-gray-300 px-4 py-2">Module</th>
                <th class="border border-gray-300 px-4 py-2">Description</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Électronique de puissance</td>
                <td class="border border-gray-300 px-4 py-2">Ce module explore les principes de base de l'électronique de puissance, y compris les convertisseurs de puissance, les techniques de commande, les applications industrielles et les aspects de fiabilité.</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Systèmes embarqués</td>
                <td class="border border-gray-300 px-4 py-2">Ce module se concentre sur les systèmes embarqués, y compris les microcontrôleurs, les systèmes en temps réel, les interfaces homme-machine et les protocoles de communication. Les étudiants acquièrent des compétences pratiques en conception et programmation de systèmes embarqués.</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Automatique non linéaire</td>
                <td class="border border-gray-300 px-4 py-2">Ce module approfondit la théorie de la commande automatique en abordant les systèmes non linéaires, les méthodes de linéarisation, les systèmes à plusieurs variables et les techniques de commande avancées.</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Réseaux de communication industriels</td>
                <td class="border border-gray-300 px-4 py-2">Ce module explore les technologies de communication utilisées dans les environnements industriels, y compris les réseaux de terrain, les protocoles industriels, la sécurité des réseaux et les applications IoT.</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Intelligence artificielle appliquée à l'automatisation</td>
                <td class="border border-gray-300 px-4 py-2">Ce module introduit les concepts et les techniques de l'intelligence artificielle, y compris les réseaux neuronaux, les algorithmes génétiques, les systèmes experts et l'apprentissage automatique, avec des applications spécifiques à l'automatisation industrielle.</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Projet pratique : Programmation de microcontrôleurs</td>
                <td class="border border-gray-300 px-4 py-2">Ce projet pratique permet aux étudiants d'appliquer leurs compétences en programmation à la conception et à la programmation de systèmes embarqués basés sur des microcontrôleurs. Ils travaillent sur des projets concrets pour résoudre des problèmes spécifiques.</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<div class="bg-gray-100 py-8 px-4">
<div class="max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold mb-6">Troisième Semestre</h1>

    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300">
            <thead class="bg-gray-200">
            <tr>
                <th class="border border-gray-300 px-4 py-2">Module</th>
                <th class="border border-gray-300 px-4 py-2">Description</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Commande avancée des systèmes dynamiques</td>
                <td class="border border-gray-300 px-4 py-2">Ce module approfondit les concepts de commande des systèmes dynamiques en abordant des sujets avancés tels que la commande prédictive, la commande optimale, la commande par modèle de référence et la commande robuste. Les étudiants étudient des techniques avancées de conception de régulateurs pour des systèmes complexes et non linéaires.</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Traitement d'images et vision par ordinateur</td>
                <td class="border border-gray-300 px-4 py-2">Ce module explore les techniques de traitement d'images et de vision par ordinateur utilisées dans divers domaines tels que la robotique, la surveillance, la santé, etc. Les sujets abordés incluent la segmentation d'images, la reconnaissance de formes, la détection d'objets et la reconstruction 3D.</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Réseaux de capteurs et instrumentation</td>
                <td class="border border-gray-300 px-4 py-2">Ce module se concentre sur les réseaux de capteurs utilisés dans les applications industrielles pour la surveillance, le contrôle et la collecte de données. Les étudiants apprennent à concevoir, déployer et gérer des réseaux de capteurs, ainsi qu'à utiliser les données collectées pour la prise de décision.</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Systèmes informatiques industriels</td>
                <td class="border border-gray-300 px-4 py-2">Ce module couvre les principes fondamentaux des systèmes informatiques utilisés dans les environnements industriels, y compris les systèmes SCADA, les systèmes de gestion de production, les systèmes MES, etc. Les étudiants apprennent à concevoir, configurer et maintenir ces systèmes pour assurer un fonctionnement efficace des processus industriels.</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Projet de recherche : Séminaire sur un sujet avancé du domaine</td>
                <td class="border border-gray-300 px-4 py-2">Dans ce projet de recherche, les étudiants choisissent un sujet avancé dans le domaine de l'électronique, de l'électrotechnique, de l'automatique ou de l'informatique industrielle et effectuent une étude approfondie sous la supervision d'un enseignant. Ils présentent ensuite leurs résultats lors d'un séminaire devant leurs pairs et des enseignants.</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<div class="bg-gray-100 py-8 px-4">
<div class="max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold mb-6">Quatrième Semestre</h1>

    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300">
            <thead class="bg-gray-200">
            <tr>
                <th class="border border-gray-300 px-4 py-2">Module</th>
                <th class="border border-gray-300 px-4 py-2">Description</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Stage en entreprise ou projet de recherche avancé</td>
                <td class="border border-gray-300 px-4 py-2">Ce module offre aux étudiants la possibilité de mettre en pratique les connaissances et compétences acquises au cours du programme à travers un stage en entreprise ou un projet de recherche avancé. Les étudiants peuvent choisir de travailler dans une entreprise où ils auront l'opportunité de contribuer à des projets concrets liés à l'électronique, l'électrotechnique, l'automatique ou l'informatique industrielle. Alternativement, les étudiants peuvent choisir de poursuivre un projet de recherche avancé sous la supervision d'un enseignant, explorant un sujet spécifique dans le domaine.</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Rédaction d'un mémoire de fin d'études</td>
                <td class="border border-gray-300 px-4 py-2">Dans ce module, les étudiants rédigent un mémoire de fin d'études basé sur leur expérience en entreprise ou leur projet de recherche avancé. Le mémoire doit présenter de manière détaillée le travail effectué, les résultats obtenus et les conclusions tirées. Il doit également démontrer une compréhension approfondie des concepts et des techniques pertinents dans le domaine choisi.</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Soutenance du mémoire devant un jury</td>
                <td class="border border-gray-300 px-4 py-2">Enfin, les étudiants soutiennent leur mémoire devant un jury composé de professeurs et de professionnels du domaine. Lors de cette soutenance, les étudiants présentent leur travail, discutent de leurs résultats et répondent aux questions du jury. Cette soutenance permet aux étudiants de démontrer leur maîtrise du sujet et de valider la réussite de leur formation.</td>
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
            <p class="text-gray-700"><span class="font-bold">Responsable de la master:</span> Pr. Bahloul BENSASSI</p>
            <p class="text-gray-700"><span class="font-bold">Téléphone:</span> <a href="">(+212) 0 00 00 00 00</a></p>
            <p class="text-gray-700"><span class="font-bold">Adresse :</span>Km 8 Route d'El Jadida, B.P 5366 Maarif Casablanca 20100 Maroc</p>
            <p class="text-gray-700"><span class="font-bold">Email:</span> <a href="mailto:Pr. Bahloul BENSASSI@gmail.com">Bahloul-BENSASSI@gmail.com</a></p>
        </div>
    </div>
</div>
</body>
</html>


