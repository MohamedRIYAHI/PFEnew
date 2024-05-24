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
<div class="x-4">
{{--slider--}}
    <div class="max-w-3xl mx-auto my-8">

        <div id="default-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                    <img src="{{ asset('fsac.jpg') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('OIP.jpeg') }}"  class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('fsac11.jpg') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('mm.jpeg') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
            </span>
            </button>
            <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
            </span>
            </button>
        </div>
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </div>
</div>
<div class="grid grid-cols-1 pt-4 ">
    <div>
        <h2 class="font-bold text-3xl text-center mb-8 ">Bienvenue sur le Portail de Formation Continue de la Faculté Hassan 2 des Sciences Aïn Chock de Casablanca !</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pl-4 pr-4">
        <div>
            <p class="font-serif text-lg leading-relaxed text-gray-800">
                À l'Université Faculté Hassan 2 des Sciences, nous comprenons parfaitement l'importance cruciale de rester compétitif dans un monde en constante évolution. C'est pourquoi nous nous engageons à vous offrir une gamme complète de programmes de formation continue, soigneusement conçus pour répondre aux besoins spécifiques des professionnels d'aujourd'hui.

                Nos programmes de formation continue sont élaborés et dispensés par des professeurs renommés et des praticiens chevronnés, garantissant ainsi une combinaison idéale entre théorie et pratique. Vous bénéficierez de l'expertise académique de notre institution de premier plan, ainsi que des conseils avisés de professionnels expérimentés dans votre domaine.
            </p>
        </div>
        <div>
            <p class="font-serif text-lg leading-relaxed text-gray-800">
                Que vous soyez en quête de perfectionnement professionnel, de mise à jour de vos compétences ou de changement de carrière, notre plateforme vous offre l'opportunité de poursuivre votre développement professionnel de manière flexible et adaptée à votre emploi du temps.

                Explorez nos programmes variés et choisissez celui qui correspond le mieux à vos objectifs et aspirations professionnelles. Nous sommes là pour vous accompagner à chaque étape de votre parcours de formation continue et vous aider à atteindre vos ambitions professionnelles.
            </p>
            <p>
                <a class="font-serif text-lg leading-relaxed text-blue-900" href="http://pfe1.test/register">
                    Rejoignez-nous dès aujourd'hui et engagez-vous sur la voie de l'excellence professionnelle avec la Faculté Hassan 2 des Sciences Aïn Chock de Casablanca !
                </a>
            </p>
        </div>
    </div>

</div>
<div x-data="{ showLicences: true, showMasters: false }" id="formations" class="my-10 mb-4 mt-5">
    <div class="pt-4 flex justify-between container mx-auto px-4">
        <button @click="showLicences = true; showMasters = false"
                :class="{ 'bg-blue-600 text-white shadow-md hover:shadow-lg': showLicences, 'bg-blue-200 text-blue-800 hover:bg-blue-600 hover:text-white transition-all duration-300 ease-in-out shadow-sm hover:scale-105': !showLicences }"
                class="uppercase w-[420px] font-semibold py-3 px-6 border border-transparent rounded transform transition-transform" id="custom-button">
            Licences Professionnelles
        </button>
        <button @click="showMasters = true; showLicences = false"
                :class="{ 'bg-blue-600 text-white shadow-md hover:shadow-lg': showMasters, 'bg-blue-200 text-blue-800 hover:bg-blue-600 hover:text-white transition-all duration-300 ease-in-out shadow-sm hover:scale-105': !showMasters }"
                class="uppercase w-[420px] font-semibold py-3 px-6 border border-transparent rounded transform transition-transform" id="custom-button">
            Masters spécialisés
        </button>
    </div>


    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-center">
            <div x-show="showLicences" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach($licences as $licence)
                    <a href="{{ route('licences', ['id' => $licence->id]) }}" class="card">
                        <div class="blob"></div>
                        <div class="content overflow-hidden text-center bg-gradient-to-br from-[#F1FEC6] to-blue-600 rounded-lg shadow-md hover:shadow-xl transition duration-300 h-32 bg">
                            <div class="p-6">
                                <h2 class="mb-4 text-xl font-medium text-blue-900">{{ $licence->nom }}</h2>
                                <p class="text-gray-700">{{ $licence->description }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <div x-show="showMasters" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach($masters as $master)
                    <a href="{{ route('masters', [$master->id]) }}" class="card">
                        <div class="blob"></div>
                        <div class="content overflow-hidden text-center bg-gradient-to-br from-blue-600 to-[#F1FEC6] rounded-lg shadow-md hover:shadow-xl transition duration-300 h-32 bg">
                            <div class="p-6">
                                <h3 class="mb-4 text-xl font-medium text-blue-900">{{ $master->nom }}</h3>
                                <p class="text-gray-700">{{ $master->description }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>


<div class="container mx-auto py-4">
    <h1 class="font-serif text-lg leading-relaxed lg:text-3xl font-extrabold text-center text-blue-700">Faculté des Sciences Aïn Chock</h1>
    <div class="font-serif text-lg  text-gray-800 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 flex flex-wrap">
            <img src="{{ asset('qq.jpeg') }}" alt="" class="w-full h-auto rounded-lg shadow-lg object-contain">
            <div class="bg-white p-8 rounded-lg shadow-lg py-20">
                <p class="font-roboto text-lg md:text-xl lg:text-xl leading-relaxed text-gray-700">La Faculté des sciences Aïn-Chock de Casablanca (FSAC) fait partie de l’Université Hassan II Casablanca. Elle a été créée en 1981 et comprend cinq départements d’enseignement et de recherche dans les domaines suivants : Mathématiques, Informatique, Physique, Chimie, Biologie et Géologie.</p>

                <p class="font-roboto text-lg md:text-xl lg:text-xl leading-relaxed text-gray-700">La Faculté des Sciences Aïn Chock est un établissement à accès ouvert à tous les bacheliers scientifiques de sa carte scolaire, les formations et l’évaluation sont organisées selon le système LMD (Licence. Master, Doctorat).</p>

                <p class="font-roboto text-lg md:text-xl lg:text-xl leading-relaxed text-gray-700">Les diplômes délivrés sont : La licence fondamentale ou la licence professionnelle ; le Master ou le Master spécialisé et le Doctorat.</p>

                <p class="font-roboto text-lg md:text-xl lg:text-xl leading-relaxed text-gray-700">La FSAC a également une offre de formation continue qui s’adresse à des salariés souhaitant préparer un Diplôme d’Université ou suivre une formation qualifiante afin de se perfectionner ou de se réorienter professionnellement.</p>
            </div>
    </div>
</div>
<!-- Component: Primary Dark Theme Footer -->
<footer class="w-full text-blue-200 mt-5">
    <!-- Main footer -->
    <div class="pt-4 pb-2 text-sm border-t border-blue-600 bg_bleufsac grisfsac">
        <div class="container px-6 mx-auto">
            <div class="flex justify-between">
                <nav class="col-span-2 md:col-span-4 lg:col-span-3 w-[300px] " aria-labelledby="footer-header">
                    <h3 class="text-xl font-bold mb-2">À PROPOS DE CETTE PAGE</h3>
                    <p>Cette page est dédiée au Centre de Formation Continue de la Faculté Hassan 2 des Sciences Aïn Chock de Casablanca.</p>
                    <p>Elle offre des informations détaillées sur les programmes de formation continue disponibles, ainsi que des détails sur les licences professionnelles et les masters spécialisés proposés par notre institution.</p>
                </nav>
                <nav class="col-span-2 md:col-span-4 lg:col-span-3" aria-labelledby="footer-header">
                    <h3 class="text-xl font-bold mb-2" id="footer-header">SUIVEZ-NOUS</h3>
                    <ul>
                        <li>
                            <a href="https://web.facebook.com/FSAC2020/?_rdc=1&_rdr" target="_blank" class="text-blue-300 hover:text-blue-200 grisfsac">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" height="16" width="16" class="w-4 h-4 shrink-0" role="graphics-symbol" aria-labelledby="title-tb01 desc-tb01">
                                    <title id="title-tb01">Icon title</title>
                                    <desc id="desc-tb01">A more detailed description of the icon</desc>
                                    <path fill="currentColor" fill-rule="evenodd" d="M37.2491 3.30238C37.0498 2.18649 36.0513 1.49746 34.9878 1.50395C32.2606 1.5206 29.7927 1.60328 27.6333 1.96988C25.4705 2.33708 23.584 2.99414 22.038 4.18283C18.9929 6.52415 17.4377 10.7872 17.3724 18.3217H11.9552C10.9254 18.3217 9.94522 18.9739 9.74313 20.0674C9.51312 21.312 9.33088 23.311 9.75643 25.8014C9.95527 26.9651 10.9939 27.7324 12.1233 27.7324H17.3703V44.3867C17.3703 45.2169 17.8349 46.0595 18.7834 46.2403C19.5015 46.3773 20.6304 46.5002 22.375 46.5002C24.1168 46.5002 25.347 46.3777 26.1718 46.2437C27.2507 46.0684 27.8777 45.1191 27.8777 44.1186V27.7324H34.9316C36.0256 27.7324 37.0562 27.009 37.2608 25.8665C37.6736 23.5618 37.4742 21.4753 37.2437 20.1563C37.0465 19.0284 36.0444 18.3217 34.9653 18.3217H27.8795C27.8917 16.7111 27.9661 15.4564 28.1447 14.4728C28.341 13.3921 28.6547 12.6875 29.1044 12.2048C29.5502 11.7263 30.1817 11.4104 31.1284 11.2121C32.0832 11.0121 33.3126 10.9408 34.9123 10.9193C36.0128 10.9045 37.0511 10.1718 37.2541 9.01765C37.6718 6.64193 37.4794 4.59202 37.2491 3.30238Z" clip-rule="evenodd" />
                                </svg>
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-blue-300 hover:text-blue-200 grisfsac" >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" height="16" width="16" class="w-4 h-4 shrink-0" role="graphics-symbol" aria-labelledby="title-tb02 desc-tb02">
                                    <title id="title-tb02">Icon title</title>
                                    <desc id="desc-tb02">A more detailed description of the icon</desc>
                                    <path fill="currentColor" d="M34.7229 4.69819C36.9179 5.13151 38.8231 6.226 39.9574 7.46121L44.8741 7.22772C46.162 7.16656 46.9576 8.61264 46.216 9.66758L42.8041 14.5217C43.7777 35.6815 22.2547 49.0961 4.54954 41.2208C3.75067 40.8654 3.58181 40.0439 3.74682 39.4029C3.91015 38.7685 4.4337 38.1304 5.23631 38.0329C7.74782 37.7279 10.886 36.8951 13.5309 34.8102C11.3351 34.4801 8.87383 33.2203 6.77118 31.5522C4.25179 29.5535 2.11595 26.8651 1.53319 24.2321C1.41942 23.7181 1.60805 23.2504 1.94754 22.9478C2.27981 22.6517 2.75116 22.5146 3.22643 22.6022C4.4998 22.8369 6.44397 23.1705 7.93366 23.3225C7.82715 23.2095 7.71399 23.0872 7.59534 22.9561C6.83881 22.1198 5.85466 20.9171 4.947 19.4528C3.13974 16.5372 1.58717 12.5021 2.86967 8.24191C3.04524 7.65872 3.52191 7.3215 4.02883 7.2399C4.52724 7.15967 5.07712 7.31911 5.46709 7.72851C7.80814 10.1862 13.7896 15.4057 22.914 16.1638C22.5823 14.0277 22.368 9.45707 27.2507 6.17582C29.7236 4.51405 32.4029 4.2402 34.7229 4.69819Z" />
                                </svg>
                                Twitter
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-blue-300 hover:text-blue-200 grisfsac">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" height="16" width="16" class="w-4 h-4 shrink-0" role="graphics-symbol" aria-labelledby="title-tb03 desc-tb03">
                                    <title id="title-tb03">Icon title</title>
                                    <desc id="desc-tb03">A more detailed description of the icon</desc>
                                    <path fill="currentColor" fillRule="evenodd" d="M18.9563 7.52344C18.7526 6.91526 18.1767 6.49018 17.5166 6.51256C13.7277 6.64105 10.4346 7.72034 9.03159 8.24815C8.46409 8.46164 7.98142 8.84195 7.6475 9.35489C6.13235 11.6824 1.35143 20.1396 1.5015 33.9816C1.51112 34.8687 1.87868 35.7421 2.60293 36.3174C4.05518 37.4709 7.22566 39.6169 12.2716 41.1548C13.1338 41.4176 14.1343 41.1791 14.6848 40.3722C15.3668 39.3727 15.9633 38.1197 16.3718 37.1704C16.4818 36.9145 16.7753 36.775 17.0546 36.8566C18.8459 37.3799 21.1512 37.7795 24.0128 37.7795C26.865 37.7795 29.1613 37.3825 30.9459 36.8617C31.2254 36.7802 31.5188 36.9197 31.6289 37.1755C32.0373 38.1241 32.6329 39.3744 33.3137 40.3722C33.8643 41.1791 34.8647 41.4176 35.727 41.1548C40.7729 39.6169 43.9433 37.4709 45.3956 36.3174C46.1198 35.7421 46.4874 34.8687 46.497 33.9816C46.6459 20.2518 41.9432 11.8198 40.3884 9.41269C40.0295 8.85716 39.4986 8.45634 38.8845 8.24366C37.3835 7.72379 33.9285 6.65561 30.4846 6.51532C29.821 6.48828 29.2456 6.91631 29.0422 7.52344L28.5352 9.03687C28.4493 9.293 28.1503 9.47311 27.8343 9.41471C27.0144 9.26322 25.7164 9.09373 24.0128 9.09373C22.2989 9.09373 20.9871 9.26529 20.1611 9.41734C19.8471 9.47513 19.5502 9.29611 19.4648 9.04103L18.9563 7.52344ZM21 25C21 27.7614 18.9853 30 16.5 30C14.0147 30 12 27.7614 12 25C12 22.2386 14.0147 20 16.5 20C18.9853 20 21 22.2386 21 25ZM31.5 30C29.0147 30 27 27.7614 27 25C27 22.2386 29.0147 20 31.5 20C33.9853 20 36 22.2386 36 25C36 27.7614 33.9853 30 31.5 30Z" clipRule="evenodd" />
                                </svg>
                                Discord
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-blue-300 hover:text-blue-200 grisfsac">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16" class="w-4 h-4 shrink-0" role="graphics-symbol" aria-labelledby="title-instagram desc-instagram">
                                    <title id="title-instagram">Icon title</title>
                                    <desc id="desc-instagram">A more detailed description of the icon</desc>
                                    <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 2.625a9.375 9.375 0 1 1 0 18.75 9.375 9.375 0 0 1 0-18.75zm0 1.875a7.5 7.5 0 1 0 0 15 7.5 7.5 0 0 0 0-15zm0 3.75a3.75 3.75 0 1 1 0 7.5 3.75 3.75 0 0 1 0-7.5zM17.25 5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3zm0 3.75a.75.75 0 1 1 0 1.5.75.75 0 0 1 0-1.5z"/>
                                </svg>
                                Instagram
                            </a>
                        </li>
                    </ul>
                </nav>

                <nav class="col-span-2 md:col-span-4 lg:col-span-3" aria-labelledby="footer-header">
                    <!-- Liens Rapides -->
                    <div>
                        <h3 class="text-xl font-bold mb-2">LIENS RAPIDES</h3>
                        <ul>
                            <li class="mb-4">
                                <a href="#" class="flex items-center text-blue-300 hover:text-blue-200 grisfsac">
                                    <i class="fas fa-home mr-2"></i>
                                    <span class="font-bold">ACCUEIL</span>
                                </a>
                                <a href="#formations" class="flex items-center text-blue-300 hover:text-blue-200 grisfsac">
                                    <i class="fas fa-graduation-cap mr-2"></i>
                                    <span class="font-bold">PROGRAMMES</span>
                                </a>
                                <div class="flex items-start text-blue-300 hover:text-blue-200 grisfsac">
                                    <i class="fas fa-user-graduate mr-2 mt-1"></i>
                                    <div>
                                        <a target="_blank" href="https://www.bing.com/search?pglt=43&q=Km+8+Route+d%27El+Jadida%2C+B.P+5366+Maarif+Casablanca+20100+Maroc&cvid=a5175137930146f4a7d9cae42c83e346&gs_lcrp=EgZjaHJvbWUyBggAEEUYOdIBCDE4ODJqMGoxqAIIsAIB&FORM=ANNTA1&PC=U531">
                                        <span class="font-bold">ADRESSE</span>
                                        <span class="block">Km 8 Route d'El Jadida, B.P 5366 Maarif Casablanca 20100 Maroc</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="flex items-start text-blue-300 hover:text-blue-200 grisfsac">
                                    <i class="fas fa-envelope mr-2 mt-1"></i>
                                    <div>
                                        <span class="font-bold">TÉLÉPHONE</span>
                                        <span class="block"> +212 5 22 23 06 80 / 84</span>
                                    </div>
                                </div>
                                <div class="flex items-start text-blue-300 hover:text-blue-200 grisfsac">
                                    <i class="fas fa-fax mr-2 mt-1"></i>
                                    <div>
                                        <span class="font-bold">FAX</span>
                                        <span class="block">+212 5 22 23 06 74</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <hr class="border-gray-700 my-2">
            <p class="text-center text-gray-450">© 2024 Centre de Formation Continue - Faculté Hassan 2 des Sciences Aïn Chock de Casablanca. Tous droits réservés.</p>
        </div>
    </div>
</footer>
</body>
</html>
