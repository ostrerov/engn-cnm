<?php

use App\Livewire\Forms\LoginForm;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('livewire.layout.auth')] class extends Component
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

        $this->redirect(
            session('url.intended', RouteServiceProvider::HOME),
            navigate: true
        );
    }
}; ?>

<div>
    <div class="relative mx-auto flex max-w-10xl items-center justify-center overflow-hidden p-4 lg:p-8">
        <section class="w-full max-w-xl py-6">
            <div class="flex flex-col overflow-hidden rounded-lg bg-white shadow-sm dark:bg-gray-800 dark:text-gray-100">
                <div class="grow p-5 md:px-16 md:py-12">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form class="space-y-6" wire:submit="login">
                        <div class="space-y-1">
                            <label for="email" class="text-sm font-medium">{{ __('Електронна адреса') }}</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                wire:model="form.email"
                                placeholder="{{ __('Введіть електронну адресу') }}"
                                required
                                class="block w-full rounded-lg border border-gray-200 px-5 py-3 leading-6 placeholder-gray-500 focus:border-teal-500 focus:ring focus:ring-teal-500 focus:ring-opacity-50 dark:border-gray-600 dark:bg-gray-800 dark:placeholder-gray-400 dark:focus:border-teal-500"
                            />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="space-y-1">
                            <label for="password" class="text-sm font-medium">{{ __('Пароль') }}</label>
                            <input
                                type="password"
                                id="password"
                                name="password"
                                wire:model="form.password"
                                placeholder="{{ __('Введіть пароль') }}"
                                required
                                class="block w-full rounded-lg border border-gray-200 px-5 py-3 leading-6 placeholder-gray-500 focus:border-teal-500 focus:ring focus:ring-teal-500 focus:ring-opacity-50 dark:border-gray-600 dark:bg-gray-800 dark:placeholder-gray-400 dark:focus:border-teal-500"
                            />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div>
                            <div class="mb-5 flex items-center justify-between space-x-2">
                                <label class="flex items-center">
                                    <input
                                        type="checkbox"
                                        id="remember_me"
                                        name="remember_me"
                                        wire:model="form.remember"
                                        class="size-4 rounded border border-gray-200 text-teal-500 focus:border-teal-500 focus:ring focus:ring-teal-500 focus:ring-opacity-50 dark:border-gray-600 dark:bg-gray-800 dark:ring-offset-gray-900 dark:checked:border-transparent dark:checked:bg-teal-500 dark:focus:border-teal-500"
                                    />
                                    <span class="ml-2 text-sm">Запамʼятати мене</span>
                                </label>
                                <a href="{{ route('password.request') }}" wire:navigate class="inline-block text-sm font-medium text-teal-600 hover:text-teal-400 dark:text-teal-400 dark:hover:text-teal-300">
                                    Забули пароль?
                                </a>
                            </div>
                            <button
                                type="submit"
                                wire:loading.remove
                                class="inline-flex w-full items-center justify-center space-x-2 rounded-lg border border-teal-700 bg-teal-700 px-6 py-3 font-semibold leading-6 text-white hover:border-teal-600 hover:bg-teal-600 hover:text-white focus:ring focus:ring-teal-400 focus:ring-opacity-50 active:border-teal-700 active:bg-teal-700 dark:focus:ring-teal-400 dark:focus:ring-opacity-90"
                            >
                                <svg
                                    class="hi-mini hi-arrow-uturn-right inline-block size-5 opacity-50"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M12.207 2.232a.75.75 0 00.025 1.06l4.146 3.958H6.375a5.375 5.375 0 000 10.75H9.25a.75.75 0 000-1.5H6.375a3.875 3.875 0 010-7.75h10.003l-4.146 3.957a.75.75 0 001.036 1.085l5.5-5.25a.75.75 0 000-1.085l-5.5-5.25a.75.75 0 00-1.06.025z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                                <span>{{ __('Увійти') }}</span>
                            </button>
                            <button
                                type="submit"
                                wire:loading
                                wire:loading.attr="disabled"
                                wire:loading.class="opacity-20 cursor-not-allowed"
                                class="inline-flex w-full items-center justify-center space-x-2 rounded-lg border border-teal-700 bg-teal-700 px-6 py-3 font-semibold leading-6 text-white hover:border-teal-600 hover:bg-teal-600 hover:text-white focus:ring focus:ring-teal-400 focus:ring-opacity-50 active:border-teal-700 active:bg-teal-700 dark:focus:ring-teal-400 dark:focus:ring-opacity-90"
                            >
                                <svg
                                    class="hi-mini hi-arrow-uturn-right inline-block size-5 opacity-50"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M12.207 2.232a.75.75 0 00.025 1.06l4.146 3.958H6.375a5.375 5.375 0 000 10.75H9.25a.75.75 0 000-1.5H6.375a3.875 3.875 0 010-7.75h10.003l-4.146 3.957a.75.75 0 001.036 1.085l5.5-5.25a.75.75 0 000-1.085l-5.5-5.25a.75.75 0 00-1.06.025z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                                <span>{{ __('В процесі...') }}</span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="grow bg-gray-50 p-5 text-center text-sm md:px-16 dark:bg-gray-700/50">
                    Немає користувача?
                    <a href="{{ route('register') }}" wire:navigate class="font-medium text-teal-600 hover:text-teal-400 dark:text-teal-400 dark:hover:text-teal-300">
                        Створити його
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>
