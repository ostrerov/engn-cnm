<?php

namespace App\Livewire;

use App\Models\Operators;
use Livewire\Attributes\On;
use Livewire\Component;

class GetOperators extends Component
{
    public object $operators;

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.get-operators');
    }

    public function mount(): void
    {
        $this->operators = Operators::all();
    }
}
