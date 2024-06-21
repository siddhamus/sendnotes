<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use Illuminate\Support\Facades\Auth;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        
        if(Auth::user()->hasRole('admin'))   {
            $this->redirect(route('dashboard', absolute: false), navigate: true);
        } else {
            $this->redirectIntended(default: route('welcome', absolute: false), navigate: false);
        }
    }
}; ?>

<section class="flex items-center justify-center min-h-screen px-6 bg-gray-100">
    <div class="w-full max-w-md space-y-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="w-auto h-10 mx-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-6 text-2xl font-bold leading-9 tracking-tight text-center text-gray-900">Sign in to your account</h2>
        </div>

        <x-card class="p-6">
            <div>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form wire:submit.prevent="login" class="space-y-6">
                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium leading-6 text-gray-900" />
                        <x-text-input wire:model="form.email" id="email" class="block w-full mt-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="email" name="email" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password')" class="block text-sm font-medium leading-6 text-gray-900" />
                        <x-text-input wire:model="form.password" id="password" class="block w-full mt-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input wire:model="form.remember" id="remember" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-600">
                            <label for="remember" class="block ml-3 text-sm leading-6 text-gray-900">{{ __('Remember me') }}</label>
                        </div>
                        <div class="text-sm leading-6">
                            @if (Route::has('password.request'))
                                <a class="font-semibold text-indigo-600 hover:text-indigo-500" href="{{ route('password.request') }}" wire:navigate>
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                    </div>

                    <div>
                        <x-primary-button class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </x-card>
    </div>
</section>
