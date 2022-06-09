<?php 
    use App\Models\Time;
?>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('time') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus />
            </div>

            <!-- Boss -->
            <div class="mt-4">
                <x-label for="boss" :value="__('Chefe')" />

                <x-input id="boss" class="block mt-1 w-full" type="text" name="boss" :value="old('boss')" />
            </div>

            <!-- Year -->
            <div class="mt-4">
                <x-label for="year" :value="__('Ano')" />

                <x-input id="year" class="block mt-1 w-full" type="text" name="year" :value="old('year')" />
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
