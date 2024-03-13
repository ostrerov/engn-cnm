<?php

use App\Livewire\Actions\Logout;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('livewire.layout.auth')] class extends Component
{
    /**
     * Send an email verification notification to the user.
     */
    public function sendVerification(): void
    {
        if (Auth::user()->hasVerifiedEmail()) {
            $this->redirect(
                session('url.intended', RouteServiceProvider::HOME),
                navigate: true
            );

            return;
        }

        Auth::user()->sendEmailVerificationNotification();

        Session::flash('status', 'verification-link-sent');
    }

    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<div>
    <div class="relative mx-auto flex max-w-10xl items-center justify-center overflow-hidden p-4 lg:p-8">
        <section class="w-full max-w-xl py-6">
            <div class="flex flex-col overflow-hidden rounded-lg bg-white shadow-sm dark:bg-gray-800 dark:text-gray-100">
                <div class="grow p-5 md:px-16 md:py-12">
                    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                    </div>

                    @if (session('status') == 'verification-link-sent')
                        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                        </div>
                    @endif

                    <div>
                        <button
                            type="submit"
                            wire:click="sendVerification"
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
                            <span>{{ __('Надіслати лист') }}</span>
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
                            <span>{{ __('Надсилання...') }}</span>
                        </button>
                    </div>
                </div>
                <div class="grow bg-gray-50 p-5 text-center text-sm md:px-16 dark:bg-gray-700/50">
                    <button type="button" wire:click="logout" class="font-medium text-teal-600 hover:text-teal-400 dark:text-teal-400 dark:hover:text-teal-300">
                        Вийти
                    </button>
                </div>
            </div>
        </section>
    </div>
</div>
