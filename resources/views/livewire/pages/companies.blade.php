<div>
    <!-- Page Headings: With Actions -->
    <div class="mb-4 text-center sm:flex sm:items-center sm:justify-between sm:border-b-2 sm:border-gray-200 sm:text-left lg:mb-8 dark:border-gray-700">
        <h2 class="py-3 text-2xl font-bold">
            Юридичні та фізичні особи
            <span class="block text-lg font-medium text-gray-600 dark:text-gray-400">
                {{ $operatorName }}
            </span>
        </h2>

        <!-- Actions -->
        <div x-data="{ slideOverOpen: false }" class="flex items-center justify-center space-x-2 rounded px-2 py-3 sm:justify-end sm:px-0">
            <button @click="slideOverOpen = !slideOverOpen" type="button" class="inline-flex items-center justify-center space-x-2 rounded-lg border border-teal-700 bg-teal-700 px-4 py-2 font-semibold leading-6 text-white hover:border-teal-600 hover:bg-teal-600 hover:text-white focus:ring focus:ring-teal-400 focus:ring-opacity-50 active:border-teal-700 active:bg-teal-700 dark:focus:ring-teal-400 dark:focus:ring-opacity-90">
                <svg
                    class="hi-outline hi-plus inline-block size-5"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 4.5v15m7.5-7.5h-15"
                    />
                </svg>
                <span>Додати особу</span>
            </button>
            @teleport('body')
                <x-slide-over>
                    <form class="flex h-full flex-col divide-y divide-gray-200 bg-white shadow-xl" wire:submit="createCompany">
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
                                                wire:model="name"
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
                                                wire:model="tax_id"
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
                            <button wire:loading.remove type="submit" class="flex-1 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Зберегти</button>
                            <button wire:loading wire:loading.attr="disabled" wire:loading.class="opacity-20 cursor-not-allowed" type="submit" class="flex-1 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Зберігаємо...</button>
                            <button @click="slideOverOpen = false" type="button" class="ml-3 flex-1 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Скасувати</button>
                        </div>
                    </form>
                </x-slide-over>
            @endteleport
        </div>
    </div>
    <livewire:get-companies :operator_id="$operatorID" @save="$refresh" />
</div>
