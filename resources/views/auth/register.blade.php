
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pré-inscription Centre de Formation Continue</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-base-200">
<header class=" font-serif relative z-20 w-full border-b shadow-lg border-b-1 border-slate-200 bg-white/90 shadow-slate-700/5 after:absolute after:top-full after:left-0 after:z-10 after:block after:h-px after:w-full after:bg-slate-200 lg:border-slate-200 lg:backdrop-blur-sm lg:after:hidden">
    <div class="relative mx-auto max-w-full px-6 lg:max-w-5xl xl:max-w-7xl 2xl:max-w-[96rem]">
        @include('layouts.navigation')

    </div>
</header>

<div class="flex justify-center">
    <div class="rounded-3xl shrink-0 w-full max-w-[1000px] mt-4 shadow-2xl bg-base-100" x-data="{ step: 1 }">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('register') }}" class="card-body" enctype="multipart/form-data">
            @csrf
            <h2 class="text-2xl font-bold text-center">Pré-inscription</h2>
            <h3 class=" ">    Tous les champs avec une Astérix (*) sont obligatoires.</h3>
            <div x-show="step === 1">
                <div>
                    <h1 class="text-2xl ">1. Informations Personnelles</h1>
                </div>
                <label class="label">
                    <span class="label-text">Photo d'identité  </span>
                </label>
                <div class="grid grid-cols-1  sm:grid-cols-2">

                    <div>
                        <img class="mask mask-circle w-[160px]"  src="prfl.png"/>
                    </div>
                    <div class="form-control">

                        <input type="file" class="file-input file-input-bordered w-full" name="photo"/>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">NOM(*)</span>
                        </label>
                        <input type="text" placeholder="Nom" name="nom" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">الإسم العائلي (*)</span>
                        </label>
                        <input type="text" placeholder="الإسم العائلي" name="nom_arabe" class="input input-bordered" required />
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">PRÉNOM(*)</span>
                        </label>
                        <input type="text" placeholder="Prenom" name="prenom" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">الإسم الشخصي (*)</span>
                        </label>
                        <input type="text" placeholder="الإسم الشخصي" name="prenom_arabe" class="input input-bordered" required />
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">DATE DE NAISSANCE (*) :</span>
                            <span id="dateError" class="error-text"></span>
                        </label>
                        <input type="date" name="date_naissance" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">LIEU DE NAISSANCE(*)</span>
                        </label>
                        <input type="text" placeholder="Lieu de naissance" name="lieu_naissance" class="input input-bordered" required />
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">CIN(*)</span>
                        </label>
                        <input type="text" placeholder="CIN" name="cin" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">TELEPHONE PORTABLE(*)</span>
                        </label>
                        <input type="text" placeholder="Telephone Portable" name="phone" class="input input-bordered" required />
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">STATUT (*)</span>
                        </label>
                        <select class="select select-bordered w-full " name="status">
                            <option disabled selected>-------------</option>
                            <option value="etudiant">Etudiant</option>
                            <option value="employe">Employe</option>
                            <option value="stagiaire">Stagiaire</option>
                            <option value="emploi">A la recherche d'un emploi</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">SEXE(*)</span>
                        </label>
                        <select class="select select-bordered w-full " name="sexe">
                            <option disabled selected>-------------</option>
                            <option value="homme">Homme</option>
                            <option value="femme">Femme</option>
                        </select>
                    </div>
                </div>


                <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">EMAIL (*)</span>
                        </label>
                        <input type="email" placeholder="Email" name="email" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">CONFIRMER VOTRE ADRESSE EMAIL (*)</span>
                        </label>
                        <input type="email" placeholder="Confirmation Email" name="confirmation_email" class="input input-bordered" required />

                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">PASSWORD (*)</span>
                        </label>
                        <input type="password" placeholder="Password" name="password" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">CONFIRMER VOTRE PASSWORD (*)</span>
                        </label>
                        <input type="password" placeholder="Confirmation Password" name="password_confirmation" class="input input-bordered" required />

                    </div>
                    <div class="justify-end mt-4">
                        @if (Route::has('login'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                {{ __('Vous avez deja un compte ?') }}
                            </a>
                        @endif
            
                
                    </div>
                </div>

                <div class="flex justify-end pt-3">

                        <button
                            type="button"
                            class="btn btn-info "

                            x-on:click="step = 2"
                        >
                            Suivant
                        </button>
                    </div>

            </div>


            <div x-show="step === 2">

                <div>
                    <h1 class="text-lg ">2. Formations académiques</h1>
                </div>

                <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">ANNÉE DU BACCALAURÉAT (*)</span>
                        </label>
{{--                        select of years from 1998 to 2024 must be 2024 first--}}
                        <select class="select select-bordered w-full " name="annee_bac">
                            <option disabled selected>-------------</option>
                            @for($i=1998; $i<=2024; $i++)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">DERNIER DIPLÔME (*)</span>
                        </label>
                        <select class="select select-bordered w-full " name="dernier_diplome">
                            <option disabled selected>-------------</option>
                            <option value="bac">DEUG</option>
                            <option value="DUT">DUT</option>
                            <option value="BTS"> BTS</option>
                            <option value="DTS">DTS</option>
                            <option value="LICENCE">LICENCE</option>
                            <option value="MASTER">MASTER</option>
                            <option value="AUTRE">AUTRE</option>
                        </select>
                    </div>
                </div><div class="grid grid-cols-1 gap-2 sm:grid-cols-2">

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">SÉRIE DU BACCALAURÉAT (*)</span>
                        </label>
                        <select class="select select-bordered w-full " name="serie_bac">
                            <option disabled selected>-------------</option>

                            <option value="BAC SCIENCES ÉCONOMIQUES">BAC SCIENCES ÉCONOMIQUES</option>
                            <option value="BAC TECHNIQUES DE GESTION ET COMPTABILITÉ">BAC TECHNIQUES DE GESTION ET COMPTABILITÉ</option>
                            <option value="BAC TECHNIQUES DE GESTION ADMINISTRATIVE">BAC TECHNIQUES DE GESTION ADMINISTRATIVE</option>
                            <option value="BAC SCIENCES DE VIE ET DE TERRE">BAC SCIENCES DE VIE ET DE TERRE</option>
                            <option value="BAC LITTERAIRE">BAC LITTERAIRE</option>
                            <option value="BAC SCIENCES HUMAINES">BAC SCIENCES HUMAINES</option>
                            <option value="BAC SCIENCES MATHÉMATIQUES A">BAC SCIENCES MATHÉMATIQUES A</option>
                            <option value="BAC SCIENCES MATHÉMATIQUES B">BAC SCIENCES MATHÉMATIQUES B</option>
                            <option value="BAC SCIENCES PHYSIQUES CHIMIE">BAC SCIENCES PHYSIQUES CHIMIE</option>
                            <option value="BAC SCIENCES ET TECHNOLOGIES ÉLECTRIQUES">BAC SCIENCES ET TECHNOLOGIES ÉLECTRIQUES</option>
                            <option value="BAC SCIENCES ET TECHNOLOGIES MÉCANIQUES">BAC SCIENCES ET TECHNOLOGIES MÉCANIQUES</option>
                            <option value="BAC ETRANGER (MISSION)">BAC ETRANGER (MISSION)</option>
                            <option value="AUTRE" >AUTRE</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">SPÉCIALITÉ DU DERNIER DIPLÔME (*)</span>
                        </label>
                        <select class="select select-bordered w-full " name="specialite">
                            <option disabled selected>-------------</option>
                            <option value="ECONOMIE">ECONOMIE</option>
                            <option value="GESTION">GESTION</option>
                            <option value="COMMERCE">COMMERCE</option>
                            <option value="DTS">DTS</option>
                            <option value="SCIENTIFIQUE">SCIENTIFIQUE</option>
                            <option value="LETTRE">LETTRE</option>
                            <option value="AUTRE">AUTRE</option>
                        </select>
                    </div>
                </div><div class="grid grid-cols-1 gap-2 sm:grid-cols-2">

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">MOYENNE DU BACCALAURÉAT (*)</span>
                        </label>
                        <input type="text" placeholder="Moyenne du Bac" name="moyenne_bac" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">ANNÉE DU DERNIER DIPLÔME(*)</span>
                        </label>
                        <select class="select select-bordered w-full " name="annee_diplome">
                            <option disabled selected>-------------</option>
                            @for($i=1998; $i<=2024; $i++)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">MENTION DU BACCALAURÉAT (*)</span>
                        </label>
                        <select class="select select-bordered w-full " name="montion_bac">
                            <option disabled selected>-------------</option>
                            <option value="PASSABLE">PASSABLE</option>
                            <option value="ASSEZ BIEN">ASSEZ BIEN</option>
                            <option value="BIEN"> BIEN </option>
                            <option value="TRÈS BIEN">TRÈS BIEN</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">NOM D'ÉTABLISSEMENT DU DERNIER DIPLÔME (*)</span>
                        </label>
                        <input type="text" placeholder="Nom D'ettablissement" name="nom_etab" class="input input-bordered" required />
                    </div>

                </div>
                <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">CV (*)</span>
                        </label>
                        <input type="file" class="file-input file-input-bordered w-full" name="cv" required/>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">LETTRE DE MOTIVATION (*)</span>
                        </label>
                        <input type="file" class="file-input file-input-bordered w-full" name="lettre_motivation" required/>
                    </div>

                </div>
                <div class="flex justify-end pt-3">

                    <button
                        type="submit"
                        class="btn btn-info"

                    >
                        Register
                    </button>
                </div>

            </div>


        </form>
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
<script >
    document.querySelector('input[type="file"]').addEventListener('change', function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            document.querySelector('img.mask').src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    });
    // Select all required fields in the first step
    var requiredFields = document.querySelectorAll('div[x-show="step === 1"] .form-control input[required], div[x-show="step === 1"] .form-control select[required]');

    // Select the "Suivant" button
    var suivantButton = document.querySelector('button[x-on\\:click="step = 2"]');

    // Function to check if all fields have values
    function checkRequiredFields() {
        for (var i = 0; i < requiredFields.length; i++) {
            if (requiredFields[i].value === '') {
                suivantButton.disabled = true;
                return;
            }
        }
        suivantButton.disabled = false;
    }

    // Call the function initially to set the button state
    checkRequiredFields();

    // Call the function every time a field value changes
    for (var i = 0; i < requiredFields.length; i++) {
        requiredFields[i].addEventListener('change', checkRequiredFields);
    }
    // Select the email and confirmation email fields
    var emailField = document.querySelector('input[name="email"]');
    var confirmationEmailField = document.querySelector('input[name="confirmation_email"]');

    // Function to check if the email and confirmation email are the same
    function checkEmailConfirmation() {
        if (emailField.value !== confirmationEmailField.value) {
            // If the emails are not the same, add the error class
            confirmationEmailField.className = 'input input-bordered input-error w-full';
        } else {
            // If the emails are the same, add the success class
            confirmationEmailField.className = 'input input-bordered input-success w-full ';
        }
    }

    // Call the function every time the confirmation email field changes
    confirmationEmailField.addEventListener('input', checkEmailConfirmation);

    // Select the password and confirmation password fields
    var passwordField = document.querySelector('input[name="password"]');
    var confirmationPasswordField = document.querySelector('input[name="password_confirmation"]');

    // Function to check if the password and confirmation password are the same
    function checkPasswordConfirmation() {
        if (passwordField.value !== confirmationPasswordField.value) {
            // If the passwords are not the same, add the error class
            confirmationPasswordField.className = 'input input-bordered input-error w-full';
        } else {
            // If the passwords are the same, add the success class
            confirmationPasswordField.className = 'input input-bordered input-success w-full ';
        }
    }

    // Call the function every time the confirmation password field changes
    confirmationPasswordField.addEventListener('input', checkPasswordConfirmation);

    // Select the date_naissance field and the error span
    var dateNaissanceField = document.querySelector('input[name="date_naissance"]');
    var dateError = document.querySelector('#dateError');

    // Function to check if the user is at least 21 years old
    function checkAge() {
        var selectedDate = new Date(dateNaissanceField.value);
        var currentDate = new Date();

        // Calculate the difference in years
        var age = currentDate.getFullYear() - selectedDate.getFullYear();

        // Adjust the age if the current date is before the birthday in the current year
        if (currentDate.getMonth() < selectedDate.getMonth() ||
            (currentDate.getMonth() == selectedDate.getMonth() && currentDate.getDate() < selectedDate.getDate())) {
            age--;
        }

        if (age < 21) {
            // If the user is less than 21 years old, display an error message and add the error class
            dateError.textContent = 'You must be at least 21 years old.';
            dateNaissanceField.className = 'input input-bordered input-error w-full';
        } else {
            // If the user is at least 21 years old, remove the error message and add the success class
            dateError.textContent = '';
            dateNaissanceField.className = 'input input-bordered input-success w-full';
        }
    }

    // Call the function every time the date_naissance field changes
    dateNaissanceField.addEventListener('input', checkAge);

</script>


</body>

</html>



