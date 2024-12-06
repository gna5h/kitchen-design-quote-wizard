<?php

use App\Http\Controllers\KitchenWizardController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/wizard/step1')->name('home');

Route::get('/wizard/step1', [KitchenWizardController::class,'showStep1'])->name('wizard.step1');
Route::post('/wizard/step1', [KitchenWizardController::class,'processStep1']);
Route::get('/wizard/step2', [KitchenWizardController::class, 'showStep2'])->name('wizard.step2');
Route::post('/wizard/step2', [KitchenWizardController::class, 'processStep2']);

