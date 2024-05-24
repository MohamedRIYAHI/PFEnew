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
    <h1 class="absolute text-5xl font-serif leading-relaxed font-extrabold text-center text-blue-700 mx-4">Science des Données Génie Logiciel et Réseaux</h1>
    <h3 class="absolute text-2xl font-serif text-white prof">Pr.ERRAISS Mohammed</h3>
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
            <p>Les objectifs d'un master spécialisé en Science des Données, Génie Logiciel et Réseaux peuvent varier selon le programme et l'institution, mais voici quelques objectifs généraux que l'on pourrait retrouver dans un tel programme :</p>
                <ol>
                <li><strong class="uppercase">Maîtrise des fondements théoriques :</strong>Comprendre les concepts fondamentaux de la science des données, du génie logiciel et des réseaux, y compris les algorithmes, les structures de données, les modèles de données, les protocoles de communication, etc.</li>
                <li><strong class="uppercase">Compétences en analyse de données :</strong>Acquérir des compétences avancées en analyse de données, y compris le traitement, l'exploration, la visualisation et l'interprétation des données, ainsi que la modélisation prédictive et l'apprentissage automatique.</li>
                <li><strong class="uppercase">Développement logiciel :</strong> Apprendre les principes du développement logiciel, y compris la conception, la programmation, les tests, la maintenance et la gestion de projet dans un contexte de développement logiciel robuste et évolutif.</li>
                    <li><strong class="uppercase">Intégration des technologies émergentes :</strong>Être capable d'intégrer les dernières technologies et techniques dans les domaines de la science des données, du génie logiciel et des réseaux pour résoudre des problèmes complexes et relever les défis actuels.</li>
                    <li><strong class="uppercase">Conception et gestion des réseaux :</strong>Comprendre les principes de base de la conception et de la gestion des réseaux informatiques, y compris les protocoles de communication, la sécurité réseau, la gestion de la bande passante, etc.</li>
                <li><strong class="uppercase">Travail en équipe et communication :</strong>Développer des compétences en travail d'équipe, en communication technique et en collaboration avec des professionnels provenant de divers domaines, en mettant l'accent sur la résolution de problèmes interdisciplinaires.</li>
                <li><strong class="uppercase">Application pratique :</strong>Avoir l'occasion de mettre en pratique les connaissances acquises à travers des projets individuels et collaboratifs, des stages en entreprise ou des projets de recherche, afin de développer une expérience concrète dans le domaine.</li>
                <li><strong class="uppercase">Éthique et responsabilité :</strong>Comprendre les questions éthiques liées à la collecte, au traitement et à l'utilisation des données, ainsi que les responsabilités professionnelles associées à la conception, au développement et à la gestion de logiciels et de réseaux.</li>
                </ol>
            <p>En combinant ces aspects, un programme de master spécialisé en Science des Données, Génie Logiciel et Réseaux vise à former des professionnels capables de relever les défis complexes du traitement et de la gestion des données, du développement logiciel et de la gestion des réseaux dans divers domaines d'application, tels que l'informatique, les télécommunications, la finance, la santé, etc.</p>
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
            <li>Être titulaire d'une licence ou équivalent dans un domaine pertinent tel que Logiciels et Réseaux ou tout domaine connexe.</li>
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
            <li>Des questions techniques et conceptuelles peuvent être posées pour évaluer la compréhension approfondie du candidat dans les domaines de Génie Logiciel et Réseaux.</li>
        </ul>
    </div>
</div>
<header class="titre">
    <h1>PROGRAMME</h1>
</header>
<div class="bg-gray-100 text-gray-900">

<div class="container mx-auto p-8">
    <div class="overflow-x-auto">
        <h1 class="text-3xl font-bold mb-6">Premier Semestre</h1>
        <table class="table-auto w-full border border-gray-400">
            <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border">Module</th>
                <th class="px-4 py-2 border">Contenu</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="px-4 py-2 border">Architecture logicielle</td>
                <td class="px-4 py-2 border">Ce module explore les principes et les pratiques de conception d'architectures logicielles robustes et évolutives. Il examine les différents styles architecturaux tels que l'architecture en couches, l'architecture orientée services (SOA), l'architecture microservices, etc. Les étudiants apprennent à concevoir des systèmes logiciels en tenant compte de la modularité, de la flexibilité, de la maintenabilité et des performances.</td>
            </tr>
            <tr>
                <td class="px-4 py-2 border">Conception orientée objet</td>
                <td class="px-4 py-2 border">Ce module se concentre sur les concepts fondamentaux de la programmation orientée objet (POO) et sur leur application dans la conception logicielle. Les étudiants apprennent à identifier les objets, les classes, les relations et les principes de conception tels que l'encapsulation, l'héritage, le polymorphisme, etc. Ils explorent également les modèles de conception (Design Patterns) pour résoudre des problèmes courants de conception logicielle.</td>
            </tr>
            <tr>
                <td class="px-4 py-2 border">Développement logiciel agile</td>
                <td class="px-4 py-2 border">Ce module met l'accent sur les méthodologies de développement logiciel agile telles que Scrum, Kanban, Extreme Programming (XP), etc. Les étudiants apprennent les valeurs, les principes et les pratiques de l'agilité, y compris la planification itérative, le développement incrémental, la collaboration en équipe, la rétroaction continue et l'adaptation aux changements.</td>
            </tr>
            <tr>
                <td class="px-4 py-2 border">Ingénierie des exigences</td>
                <td class="px-4 py-2 border">Ce module traite des techniques et des processus utilisés pour recueillir, analyser, spécifier et gérer les exigences des systèmes logiciels. Les étudiants apprennent à établir un dialogue avec les parties prenantes, à identifier les besoins des utilisateurs, à formaliser les exigences à l'aide de langages de modélisation tels que UML (Unified Modeling Language), à vérifier leur cohérence et à les gérer tout au long du cycle de vie du logiciel.</td>
            </tr>
            <tr>
                <td class="px-4 py-2 border">Gestion de la qualité logicielle</td>
                <td class="px-4 py-2 border">Ce module aborde les principes et les pratiques de gestion de la qualité logicielle pour assurer la fiabilité, la robustesse et la satisfaction des utilisateurs des logiciels. Il couvre des sujets tels que les normes de qualité, les techniques de test (tests unitaires, tests d'intégration, tests système, etc.), l'assurance qualité, la vérification de la conformité aux spécifications, la gestion des anomalies et l'amélioration continue des processus de développement.</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<div class="bg-gray-100 text-gray-900">

<div class="container mx-auto p-8">
    <h1 class="text-3xl font-bold mb-6">Deuxième Semestre</h1>

    <div class="overflow-x-auto">
        <table class="table-auto w-full border border-gray-400">
            <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border">Module</th>
                <th class="px-4 py-2 border">Contenu</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="px-4 py-2 border">Programmation avancée (Java, C++, etc.)</td>
                <td class="px-4 py-2 border">Ce module se concentre sur l'apprentissage avancé des langages de programmation tels que Java, C++, et d'autres langages similaires. Les étudiants approfondissent leur compréhension des concepts avancés de programmation, tels que la gestion de la mémoire, les structures de données complexes, la programmation orientée objet avancée, la concurrence, la parallélisme, etc. L'objectif est de maîtriser ces langages pour pouvoir développer des applications logicielles complexes et performantes.</td>
            </tr>
            <tr>
                <td class="px-4 py-2 border">Développement web (HTML, CSS, JavaScript, frameworks)</td>
                <td class="px-4 py-2 border">Ce module se concentre sur le développement d'applications web dynamiques et interactives. Les étudiants apprennent les langages de base du développement web, tels que HTML pour la structure, CSS pour la présentation et JavaScript pour l'interactivité. En outre, les frameworks populaires comme React.js, Angular, ou Vue.js peuvent être abordés. Les sujets comprennent la création de sites web réactifs, l'utilisation de l'AJAX pour les requêtes asynchrones, la manipulation du DOM, etc.</td>
            </tr>
            <tr>
                <td class="px-4 py-2 border">Bases de données et SQL</td>
                <td class="px-4 py-2 border">Ce module couvre les concepts fondamentaux des bases de données relationnelles et l'utilisation du langage SQL (Structured Query Language) pour interagir avec celles-ci. Les étudiants apprennent à concevoir des schémas de bases de données, à créer des requêtes SQL complexes pour récupérer, insérer, mettre à jour et supprimer des données, à optimiser les performances des requêtes, à assurer la sécurité des données et à comprendre les concepts avancés de gestion des données.</td>
            </tr>
            <tr>
                <td class="px-4 py-2 border">Outils de gestion de version (Git, SVN)</td>
                <td class="px-4 py-2 border">Ce module se concentre sur l'utilisation des outils de gestion de versions tels que Git, SVN (Subversion), Mercurial, etc. Les étudiants apprennent à utiliser ces outils pour gérer efficacement les versions de leur code source, collaborer avec d'autres développeurs, gérer les branches de développement, résoudre les conflits de fusion et suivre l'historique des modifications du code.</td>
            </tr>
            <tr>
                <td class="px-4 py-2 border">Intégration continue et déploiement continu</td>
                <td class="px-4 py-2 border">Ce module explore les concepts et les pratiques de l'intégration continue (CI) et du déploiement continu (CD). Les étudiants apprennent à automatiser le processus de construction, de test et de déploiement de leurs applications logicielles. Ils utilisent des outils populaires tels que Jenkins, Travis CI, CircleCI, etc., pour automatiser les tests unitaires, les tests d'intégration, le déploiement sur des environnements de test et de production, et pour assurer la qualité et la fiabilité du processus de développement.</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
    <div class="bg-gray-100 text-gray-900">

    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6">Troisième Semestre</h1>

        <div class="overflow-x-auto">
            <table class="table-auto w-full border border-gray-400">
                <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2 border">Module</th>
                    <th class="px-4 py-2 border">Contenu</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="px-4 py-2 border">Protocoles de communication</td>
                    <td class="px-4 py-2 border">Ce module explore les protocoles de communication utilisés dans les réseaux informatiques. Les étudiants étudient les principaux protocoles de communication, tels que TCP/IP, HTTP, FTP, SMTP, etc. Ils apprennent comment ces protocoles fonctionnent, comment ils sont utilisés pour transférer des données entre les appareils connectés à un réseau, et les considérations de performance et de sécurité associées à leur utilisation.</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border">Sécurité des réseaux</td>
                    <td class="px-4 py-2 border">Ce module se concentre sur les principes fondamentaux de la sécurité des réseaux informatiques. Les étudiants apprennent les menaces courantes auxquelles sont confrontés les réseaux, telles que les attaques par déni de service (DDoS), les attaques par force brute, les attaques de type homme du milieu (MITM), etc. Ils étudient également les techniques de défense, telles que la mise en place de pare-feu, la configuration de VPN (Virtual Private Network), la surveillance du trafic réseau, etc.</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border">Virtualisation et cloud computing</td>
                    <td class="px-4 py-2 border">Ce module examine les concepts de virtualisation et de cloud computing. Les étudiants apprennent les bases de la virtualisation des serveurs, des machines virtuelles (VM), des conteneurs, etc. Ils explorent également les services de cloud computing tels que l'infrastructure en tant que service (IaaS), la plate-forme en tant que service (PaaS) et le logiciel en tant que service (SaaS). Les sujets incluent la configuration et la gestion des environnements virtualisés, le déploiement d'applications dans le cloud, la sécurité des données dans le cloud, etc.</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border">Administration système</td>
                    <td class="px-4 py-2 border">Ce module se concentre sur les compétences nécessaires pour administrer et gérer des systèmes informatiques. Les étudiants apprennent à installer, configurer et maintenir des systèmes d'exploitation tels que Linux, Windows Server, etc. Ils acquièrent des compétences en gestion des utilisateurs et des groupes, en configuration des services réseau, en surveillance des performances du système, en sauvegarde et en récupération des données, etc.</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border">Cryptographie</td>
                    <td class="px-4 py-2 border">Ce module explore les principes et les techniques de la cryptographie pour sécuriser les communications et les données. Les étudiants étudient les fondements mathématiques de la cryptographie, les algorithmes de chiffrement symétriques et asymétriques, les protocoles de sécurité tels que SSL/TLS, les fonctions de hachage, les signatures numériques, etc. Ils apprennent également à utiliser des outils et des bibliothèques de cryptographie pour implémenter des mécanismes de sécurité dans les applications et les systèmes.</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    </div>
</div>
<div class="bg-gray-100 text-gray-900">

<div class="container mx-auto p-8">
    <h1 class="text-3xl font-bold mb-8">Modules du programme</h1>

    <div class="overflow-x-auto">
        <table class="table-auto w-full border border-gray-400">
            <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border">Module</th>
                <th class="px-4 py-2 border">Contenu</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="px-4 py-2 border">Réseaux sans fil et mobiles</td>
                <td class="px-4 py-2 border">Ce module se concentre sur les technologies de communication sans fil et les réseaux mobiles. Les étudiants étudient les principes fondamentaux des réseaux sans fil, tels que les normes IEEE 802.11 (Wi-Fi), Bluetooth, LTE, etc. Ils apprennent également les architectures des réseaux cellulaires, les protocoles de communication mobiles, la conception et la planification des réseaux sans fil, ainsi que les aspects de sécurité et de gestion de la mobilité.</td>
            </tr>
            <tr>
                <td class="px-4 py-2 border">Sécurité informatique</td>
                <td class="px-4 py-2 border">Ce module explore les concepts, les techniques et les outils utilisés pour sécuriser les systèmes informatiques et les données contre les menaces et les attaques. Les étudiants étudient les principes de base de la sécurité informatique, les méthodes d'attaque courantes telles que les logiciels malveillants, les violations de données, etc. Ils apprennent également les stratégies de défense telles que la gestion des identités, le cryptage des données, la surveillance des menaces, etc.</td>
            </tr>
            <tr>
                <td class="px-4 py-2 border">Big Data et analyse des données</td>
                <td class="px-4 py-2 border">Ce module se concentre sur le traitement et l'analyse des données volumineuses (Big Data). Les étudiants apprennent les technologies et les techniques utilisées pour collecter, stocker, traiter et analyser de grandes quantités de données structurées et non structurées. Ils étudient les outils de Big Data tels que Hadoop, Spark, Kafka, etc., ainsi que les techniques d'analyse des données telles que le data mining, l'apprentissage automatique (machine learning), l'analyse prédictive, etc.</td>
            </tr>
            <tr>
                <td class="px-4 py-2 border">Internet des objets (IoT)</td>
                <td class="px-4 py-2 border">Ce module explore les concepts et les applications de l'Internet des objets (IoT), où des objets physiques sont connectés et échangent des données via Internet. Les étudiants étudient les technologies de communication IoT telles que MQTT, CoAP, etc., les protocoles de sécurité IoT, les plateformes IoT telles que Arduino, Raspberry Pi, etc., ainsi que les applications de l'IoT dans différents domaines tels que la domotique, la santé, l'industrie, etc.</td>
            </tr>
            <tr>
                <td class="px-4 py-2 border">Développement d'applications spécifiques (mobile, web, etc.)</td>
                <td class="px-4 py-2 border">Ce module se concentre sur le développement d'applications logicielles spécifiques pour différents environnements, tels que les applications mobiles, les applications web, etc. Les étudiants apprennent les technologies et les frameworks pertinents pour chaque plateforme, ainsi que les meilleures pratiques de développement. Ils acquièrent des compétences en conception d'interfaces utilisateur, en développement back-end et front-end, en déploiement d'applications, en gestion de bases de données, etc.</td>
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
            <p class="text-gray-700"><span class="font-bold">Responsable de la master:</span>Pr.ERRAISS Mohammed</p>
            <p class="text-gray-700"><span class="font-bold">Téléphone:</span> <a href="">(+212) 0 00 00 00 00</a></p>
            <p class="text-gray-700"><span class="font-bold">Adresse :</span>Km 8 Route d'El Jadida, B.P 5366 Maarif Casablanca 20100 Maroc</p>
            <p class="text-gray-700"><span class="font-bold">Email:</span> <a href="mailto:ERRAISS-Mohammed@gmail.com@gmail.com">ERRAISS-Mohammed@gmail.com</a></p>
        </div>
    </div>
</div>
</body>
</html>


