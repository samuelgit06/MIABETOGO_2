<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" style="font-family: Elephant; font-size: 60px; text-align:center;">
                <h1>M</h1>            
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600" style="text-align: center;"> 
            {{ __('Mot de passe oublié? Aucun problème. Indiquez-nous simplement votre adresse Email et nous vous enverrons par Email un lien de réinitialisation de mot de passe qui vous permettra d\'en choisir un nouveau.') }}
        <div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <br><form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Obtenir le lien via Email') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
