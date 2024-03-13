<?php

namespace App\Livewire;

use Livewire\Component;

class GetCompanies extends Component
{
    public int $operatorID;

    public object $companies;

    public function mount($operator_id)
    {
        $this->operatorID = $operator_id;
        $this->companies = \App\Models\Companies::where(['operator_id' => $operator_id])->get();
    }

    public function render()
    {
        return view('livewire.get-companies');
    }
}
