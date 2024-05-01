<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="grid grid-cols-2 gap-4">

            <div>
                <x-input-label for="nom" :value="__('Nom')" />
                <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
                <x-input-error :messages="$errors->get('nom')" class="mt-2" />
            </div>
            <div >
                <x-input-label for="nom_arabe" :value="__('الإسم العائلي')" />
                <x-text-input id="nom_arabe" class="block mt-1 w-full" type="text" name="nom_arabe" :value="old('nom_arabe')" required autofocus autocomplete="nom_arabe" />
                <x-input-error :messages="$errors->get('nom_arabe')" class="mt-2" />
            </div>

        </div>
        <div class="grid grid-cols-2 gap-4 mt-4">

            <div>
                <x-input-label for="prenom" :value="__('Prenom')" />
                <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="prenom" />
                <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
            </div>
            <div >
                <x-input-label for="prenom_arabe" :value="__('الإسم الشخصي')" />
                <x-text-input id="prenom_arabe" class="block mt-1 w-full" type="text" name="prenom_arabe" :value="old('prenom_arabe')" required autofocus autocomplete="prenom_arabe" />
                <x-input-error :messages="$errors->get('prenom_arabe')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="lieu_naissance" :value="__('Lieu de naissance')" />
                <x-text-input id="lieu_naissance" class="block mt-1 w-full" type="text" name="lieu_naissance" :value="old('lieu_naissance')" required autofocus autocomplete="lieu_naissance" />
                <x-input-error :messages="$errors->get('lieu_naissance')" class="mt-2" />
            </div>
            <div >
                <x-input-label for="lieu_naissance_arabe" :value="__('مكان الإزدياد')" />
                <x-text-input id="lieu_naissance_arabe" class="block mt-1 w-full" type="text" name="lieu_naissance_arabe" :value="old('lieu_naissance_arabe')" required autofocus autocomplete="lieu_naissance_arabe" />
                <x-input-error :messages="$errors->get('lieu_naissance_arabe')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="date_naissance" :value="__('Date de naissance')" />
                <x-text-input id="date_naissance" class="block mt-1 w-full" type="date" name="date_naissance" :value="old('date_naissance')" autocomplete="date_naissance" required autofocus autocomplete="date_naissance" />
                <x-input-error :messages="$errors->get('date_naissance')" class="mt-2" />
            </div>
            <div >
                <x-input-label for="phone" :value="__('Telephone')" />
                <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')"  required autofocus autocomplete="phone" pattern="[0-9]+" inputmode="numeric" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="sexe" :value="__('SEXE')" />
                <select id="sexe" name="sexe" class="block mt-1 w-full px-3 py-2 border-gray-300 rounded-md shadow-sm " required autofocus autocomplete="sexe">
                    <option value="" {{ old('sexe') == '' ? 'selected' : '' }}></option>
                    <option value="homme" {{ old('sexe') == 'homme' ? 'selected' : '' }}>HOMME</option>
                    <option value="femme" {{ old('sexe') == 'femme' ? 'selected' : '' }}>FEMME</option>
                </select>
                <x-input-error :messages="$errors->get('sexe')" class="mt-2" />
            </div>

            <div >
                <x-input-label for="cin" :value="__('CIN')" />
                <x-text-input id="cin" class="block mt-1 w-full" type="text" name="cin" :value="old('cin')" required autofocus autocomplete="cin" />
                <x-input-error :messages="$errors->get('cin')" class="mt-2" />
            </div>
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
