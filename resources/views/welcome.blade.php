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
<body>
<header class="relative z-20 w-full border-b shadow-lg border-b-1 border-slate-200 bg-white/90 shadow-slate-700/5 after:absolute after:top-full after:left-0 after:z-10 after:block after:h-px after:w-full after:bg-slate-200 lg:border-slate-200 lg:backdrop-blur-sm lg:after:hidden">
    <div class="relative mx-auto max-w-full px-6 lg:max-w-5xl xl:max-w-7xl 2xl:max-w-[96rem]">
        <nav aria-label="main navigation" class="flex h-[5.5rem] items-stretch justify-between font-medium text-slate-700" role="navigation">
            <!-- Brand logo -->
            <a id="Centre" aria-label="WindUI logo" aria-current="page" class="flex items-center gap-2 py-3 text-lg whitespace-nowrap focus:outline-none lg:flex-1" href="javascript:void(0)">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px"
                     viewBox="0 0 267 300" enable-background="new 0 0 267 300" xml:space="preserve">
                            <x-application-logo class="block w-auto text-gray-800 fill-current h-9" />
                        </svg>
                Centre de Formation Continue
            </a>
            <!-- Mobile trigger -->
            <button class="relative self-center order-10 visible block w-10 h-10 opacity-100 lg:hidden" aria-expanded="false" aria-label="Toggle navigation">
                <div class="absolute w-6 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <span aria-hidden="true" class="absolute block h-0.5 w-9/12 -translate-y-2 transform rounded-full bg-slate-900 transition-all duration-300"></span>
                    <span aria-hidden="true" class="absolute block h-0.5 w-6 transform rounded-full bg-slate-900 transition duration-300"></span>
                    <span aria-hidden="true" class="absolute block h-0.5 w-1/2 origin-top-left translate-y-2 transform rounded-full bg-slate-900 transition-all duration-300"></span>
                </div>
            </button>
            <!-- Navigation links -->
            <ul role="menubar" aria-label="Select page" class="invisible absolute top-0 left-0 z-[-1] ml-auto h-screen w-full justify-center overflow-hidden overflow-y-auto overscroll-contain bg-white/90 px-8 pb-12 pt-28 font-medium opacity-0 transition-[opacity,visibility] duration-300 lg:visible lg:relative lg:top-0 lg:z-0 lg:flex lg:h-full lg:w-auto lg:items-stretch lg:overflow-visible lg:bg-white/0 lg:px-0 lg:py-0 lg:pt-0 lg:opacity-100">
                <li role="none" class="flex items-stretch">
                    <a role="menuitem" aria-haspopup="false" class="flex items-center gap-2 py-4 transition-colors duration-300 hover:text-emerald-500 focus:text-emerald-600 focus:outline-none focus-visible:outline-none lg:px-8" href="javascript:void(0)"> <span>Acceuil</span></a>
                </li>
                <li role="none" class="flex items-stretch">
                    <a role="menuitem" aria-current="page" aria-haspopup="false" class="flex items-center gap-2 py-4 transition-colors duration-300 text-emerald-500 hover:text-emerald-600 focus:text-emerald-600 focus:outline-none focus-visible:outline-none lg:px-8" href="javascript:void(0)"> <span>Mot de Doyen</span> </a>
                </li>
                <li role="none" class="flex items-stretch">
                    <a role="menuitem" aria-haspopup="false" class="flex items-center gap-2 py-4 transition-colors duration-300 hover:text-emerald-500 focus:text-emerald-600 focus:outline-none focus-visible:outline-none lg:px-8" href="javascript:void(0)"> <span>Mot de Directeur</span> </a>
                </li>
                            @if (Route::has('login'))
                                @auth

                                <li role="none" class="flex items-stretch">
                                    <a href="{{ url('/dashboard') }}" role="menuitem" aria-haspopup="false" class="flex items-center gap-2 py-4 transition-colors duration-300 hover:text-emerald-500 focus:text-emerald-600 focus:outline-none focus-visible:outline-none lg:px-8"> <span>Dashboard</span> </a>
                                </li>

                                @else

                        <li role="none" class="flex items-stretch">
                            <a href="{{ url('login') }}" role="menuitem" aria-haspopup="false" class="flex items-center gap-2 py-4 transition-colors duration-300 hover:text-emerald-500 focus:text-emerald-600 focus:outline-none focus-visible:outline-none lg:px-8"> <span>Login</span> </a>
                        </li>

                                                    @if (Route::has('register'))

                            <li role="none" class="flex items-stretch">
                                <a href="{{ url('register') }}" role="menuitem" aria-haspopup="false" class="flex items-center gap-2 py-4 transition-colors duration-300 hover:text-emerald-500 focus:text-emerald-600 focus:outline-none focus-visible:outline-none lg:px-8"> <span>Register</span> </a>
                            </li>
                                                    @endif
                                                @endauth
                                        @endif
            </ul>

        </nav>
        <div>
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1000px" height="400px"
                 viewBox="0 0 100 300" enable-background="new 0 0 267 300" xml:space="preserve">
            <x-slider/>
            </svg>
        </div>
        <div class="grid grid-cols-1">
            <div>

                <h2 class="font-bold text-2xl flex justify-center">Bienvenue sur le Portail de Formation Continue de Faculté Hassan 2 des Sciences Aïn Chock de Casablanca </h2>
            </div>
            <p class="font-serif">
                Nous vous souhaitons la bienvenue sur notre plateforme dédiée à l'excellence professionnelle et au développement continu. À l'Université Faculté Hassan 2 des Sciences , nous comprenons l'importance cruciale de rester compétitif dans un monde en constante évolution. C'est pourquoi nous sommes fiers de vous offrir une gamme complète de programmes de formation continue conçus pour répondre aux besoins spécifiques des professionnels d'aujourd'hui.
            </p>
            <p class="font-serif">
                Les programmes de formation continue à l'Université Faculté Hassan 2 des Sciences sont élaborés et dispensés par des professeurs renommés et des praticiens chevronnés, garantissant ainsi une combinaison idéale entre théorie et pratique. Vous bénéficierez de l'expertise académique de notre institution de premier plan ainsi que des conseils avisés de professionnels expérimentés dans votre domaine.
            </p>
        </div>
        <div class="pt-4 flex justify-between">
            <button class="w-[420px] bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Licence
            </button>
            <button class="w-[420px] bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Master
            </button>
        </div>
        <div class="pt-4 grid grid-cols-3 gap-4">
            @foreach($licences as $licence)

                <a href="">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $licence->nom }}</div>
                            <p class="text-gray-700 text-base">
                                {{ $licence->description }}
                            </p>
                        </div>
                    </div>

                </a>
            @endforeach
        </div>


    </div>
</header>

</body>
</html>



