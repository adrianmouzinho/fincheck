<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <header class="flex flex-col items-center gap-4 text-center">
        <h1 class="text-2xl font-bold text-gray-900 tracking-[-1px]">Entre em sua conta</h1>

        <p class="space-x-1">
            <span class="text-gray-700 tracking-[-0.5px]">Novo por aqui?</span>
            <a href="{{ route('register') }}" class="tracking-[-1px] text-teal-900 font-medium">Crie uma conta</a>
        </p>
    </header>

    <form method="POST" action="{{ route('login') }}" class="mt-[60px] flex flex-col gap-4">
        @csrf

        <x-input type="email" :placeholder="__('Email')" name="email" :value="old('email')" required autofocus
            autocomplete="username" :errors="$errors->get('email')" />

        <x-input type="password" :placeholder="__('Senha')" name="password" :value="old('password')" required
            autocomplete="current-password" :errors="$errors->get('password')" />

        <x-primary-button class="mt-2">
            {{ __('Entrar') }}
        </x-primary-button>
    </form>

    <a href="{{ route('password.request') }}"
        class="tracking-[-1px] text-teal-900 font-medium mt-2 mx-auto w-[max-content] block">Esqueci minha senha
    </a>
</x-guest-layout>
