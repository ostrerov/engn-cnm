<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Companies;
use App\Models\Operators;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'index')->name('index');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('operator')->group(function () {
        Route::get('{operator_id?}/companies', Companies::class)->where(['operator_id' => Operators::select('id')->get()])->name('companies');
    });
});
