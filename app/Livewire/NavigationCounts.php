<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Component;

class NavigationCounts extends Component
{
    public int $count;

    public function mount(int $operatorID, int $table): void
    {
        $this->count = match ($table) {
            1 => DB::table('companies')->where('operator_id', $operatorID)->count(),
            2 => DB::table('tariffs')->where('operator_id', $operatorID)->count(),
            3 => DB::table('personal_accounts')->where('operator_id', $operatorID)->count(),
            4 => DB::table('numbers')->where('operator_id', $operatorID)->count(),
            default => 0,
        };
    }

    public function placeholder(): string
    {
        return <<<'blade'
            <div role="status" class="max-w-sm animate-pulse">
                <div class="h-6 bg-gray-200 rounded-full dark:bg-gray-700 w-6"></div>
            </div>
        blade;
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.navigation-counts');
    }
}
