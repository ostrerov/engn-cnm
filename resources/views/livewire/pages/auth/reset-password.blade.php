<?php

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Volt\Component;

new #[Layout('livewire.layout.auth')] class extends Component
{
    #[Locked]
    public string $token = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Mount the component.
     */
    public function mount(string $token): void
    {
        $this->token = $token;

        $this->email = request()->string('email');
    }

    /**
     * Reset the password for the given user.
     */
    public function resetPassword(): void
    {
        $this->validate([
            'token' => ['required'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $this->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) {
                $user->forceFill([
                    'password' => Hash::make($this->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        if ($status != Password::PASSWORD_RESET) {
            $this->addError('email', __($status));

            return;
        }

        Session::flash('status', __($status));

        $this->redirectRoute('login', navigate: true);
    }
}; ?>

<div>
    <div class="relative mx-auto flex max-w-10xl items-center justify-center overflow-hidden p-4 lg:p-8">
        <section class="w-full max-w-xl py-6">
            <div class="flex flex-col overflow-hidden rounded-lg bg-white shadow-sm dark:bg-gray-800 dark:text-gray-100">
                <div class="grow p-5 md:px-16 md:py-12">
                    <form class="space-y-6" wire:submit="resetPassword">
                        <div class="space-y-1">
                            <label for="email" class="text-sm font-medium">{{ __('Електронна адреса') }}</label>
                            <input
                                type="text"
                                id="email"
                                name="email"
                                wire:model="email"
                                placeholder="Введіть вашу електронну адресу"
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
                                wire:model="password"
                                placeholder="Встановіть новий складний пароль"
                                required
                                class="block w-full rounded-lg border border-gray-200 px-5 py-3 leading-6 placeholder-gray-500 focus:border-teal-500 focus:ring focus:ring-teal-500 focus:ring-opacity-50 dark:border-gray-600 dark:bg-gray-800 dark:placeholder-gray-400 dark:focus:border-teal-500"
                            />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="space-y-1">
                            <label for="password_confirmation" class="text-sm font-medium">{{ __('Підтвердження пароля') }}</label>
                            <input
                                type="password"
                                id="password_confirmation"
                                name="password_confirmation"
                                wire:model="password_confirmation"
                                placeholder="Введіть вашу електронну адресу"
                                required
                                class="block w-full rounded-lg border border-gray-200 px-5 py-3 leading-6 placeholder-gray-500 focus:border-teal-500 focus:ring focus:ring-teal-500 focus:ring-opacity-50 dark:border-gray-600 dark:bg-gray-800 dark:placeholder-gray-400 dark:focus:border-teal-500"
                            />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        <div>
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
                                <span>{{ __('Встановити пароль') }}</span>
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
                                <span>{{ __('Встановлення...') }}</span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="grow bg-gray-50 p-5 text-center text-sm md:px-16 dark:bg-gray-700/50">
                    Згадали пароль?
                    <a href="{{ route('login') }}" wire:navigate class="font-medium text-teal-600 hover:text-teal-400 dark:text-teal-400 dark:hover:text-teal-300">
                        Увійти
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>
