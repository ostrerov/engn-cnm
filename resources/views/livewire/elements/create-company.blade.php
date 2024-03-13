<?php

use Livewire\Volt\Component;
use App\Livewire\Forms\CompanyForm;

new class extends Component
{
    public CompanyForm $form;

    public function addCompany(): void
    {
        $this->validate();

        $this->form->save();

        dd($this);
    }
} ?>
<form class="flex h-full flex-col divide-y divide-gray-200 bg-white shadow-xl" wire:submit="addCompany">
    <div class="h-0 flex-1 overflow-y-auto">
        <div class="bg-emerald-600 px-4 py-6 sm:px-6">
            <div class="flex items-center justify-between">
                <h2 class="text-base font-semibold leading-6 text-white" id="slide-over-title">Нова особа</h2>
            </div>
            <div class="mt-1">
                <p class="text-sm text-emerald-300">Створіть нову особу для керування номерами своєї корпоративної мережі</p>
            </div>
        </div>
        <div class="flex flex-1 flex-col justify-between">
            <div class="divide-y divide-gray-200 px-4 sm:px-6">
                <div class="space-y-6 pb-5 pt-6">
                    <div class="space-y-1">
                        <label for="name" class="font-medium">Назва особи</label>
                        <input
                            class="block w-full rounded-lg border border-gray-200 px-3 py-2 leading-6 placeholder-gray-500 focus:border-teal-500 focus:ring focus:ring-teal-500 focus:ring-opacity-50 dark:border-gray-600 dark:bg-gray-800 dark:placeholder-gray-400 dark:focus:border-teal-500"
                            type="text"
                            id="name"
                            name="name"
                            wire:model="form.name"
                            placeholder="Введіть назву особи.."
                            required
                        />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="space-y-1">
                        <label for="tax_id" class="font-medium">ІПН/ЄДРПО</label>
                        <input
                            class="block w-full rounded-lg border border-gray-200 px-3 py-2 leading-6 placeholder-gray-500 focus:border-teal-500 focus:ring focus:ring-teal-500 focus:ring-opacity-50 dark:border-gray-600 dark:bg-gray-800 dark:placeholder-gray-400 dark:focus:border-teal-500"
                            type="text"
                            id="tax_id"
                            name="tax_id"
                            wire:model="form.tax_id"
                            placeholder="Введіть ІПН або ЄДРПО.."
                            required
                        />
                        <x-input-error :messages="$errors->get('tax_id')" class="mt-2" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex px-4 py-4">
        <button wire:target="form" wire:loading.remove type="submit" class="flex-1 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Зберегти</button>
        <button wire:target="form" wire:loading wire:loading.attr="disabled" wire:loading.class="opacity-20 cursor-not-allowed" type="submit" class="flex-1 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Зберігаємо...</button>
        <button @click="slideOverOpen = false" type="button" class="ml-3 flex-1 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Скасувати</button>
    </div>
</form>

