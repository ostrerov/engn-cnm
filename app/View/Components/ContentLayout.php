<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class ContentLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('layouts.content');
    }
}
