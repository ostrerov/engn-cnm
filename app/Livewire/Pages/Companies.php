<?php

namespace App\Livewire\Pages;

use App\Livewire\GetOperators;
use App\Livewire\NavigationCounts;
use App\Models\Operators;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.content')]
class Companies extends Component
{
    public int $operatorID;
    public string $operatorName;
    public object $companies;

    #[Validate('required|min:8')]
    public string $name;

    #[Validate('required|integer|min:5')]
    public int $tax_id;

    public function mount($operator_id): void
    {
        $this->operatorID = $operator_id;
        $this->operatorName = Operators::where(['id' => $operator_id])->value('name');
        $this->companies = \App\Models\Companies::where(['operator_id' => $operator_id])->get();
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.pages.companies');
    }

    public function createCompany():void
    {
        $this->validate();

        $this->ensureIsNotRateLimited();

        \App\Models\Companies::create([
            'name' => $this->name,
            'tax_id' => $this->tax_id,
            'operator_id' => $this->operatorID
        ]);

        $this->reset();
        $this->dispatch('created')->self();
        $this->dispatch('created')->to(GetOperators::class);
        $this->dispatch('created')->to(NavigationCounts::class);
    }

    /**
     * Ensure the authentication request is not rate limited.
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'name' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the authentication rate limiting throttle key.
     */
    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->name).'|'.request()->ip());
    }
}
