<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
<<<<<<< HEAD
                <x-label for="name" :value="__('Nome')" />
=======
                <x-label for="name" :value="__('Name')" />
>>>>>>> dev

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <div class="mt-4">
<<<<<<< HEAD
                <x-label for="telefone" :value="__('Telefone')" />
=======
                <x-label for="telefone" :value="__('telefone')" />
>>>>>>> dev

                <x-input id="telefone" class="block mt-1 w-full" type="text" name="telefone" :value="old('telefone')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
<<<<<<< HEAD
                <x-label for="password" :value="__('Senha')" />
=======
                <x-label for="password" :value="__('Password')" />
>>>>>>> dev

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
<<<<<<< HEAD
                <x-label for="password_confirmation" :value="__('Confirmar Senha')" />
=======
                <x-label for="password_confirmation" :value="__('Confirm Password')" />
>>>>>>> dev

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
