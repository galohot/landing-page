<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;

Route::get('/landing-page',[SectionController::class,'index'])->name('section.index');
Route::post('/landing-page/contact', [ContactFormController::class, 'store'])->name('contact.store');


Route::get('/landing-page/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/landing-page/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/landing-page/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/landing-page/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
