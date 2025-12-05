<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Switch bahasa (ID / EN)
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['id', 'en'])) {
        session(['locale' => $locale]);
    }
    return back();
})->name('lang.switch');

Route::get('/', function () {
    return view('front.home');
})->name('home');

Route::view('/about', 'front.about')->name('about');
Route::view('/services', 'front.services')->name('services');
Route::view('/projects', 'front.projects')->name('projects');
Route::view('/contact', 'front.contact')->name('contact');
