<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/news', [PagesController::class, 'news']);
Route::get('/students', [PagesController::class, 'students']);
Route::get('/teachers', [PagesController::class, 'teachers']);




//---------- Tilni o'rnatish uchun route --------------
Route::get('/language/{lang}', function($lang){
    if($lang == 'uz' or $lang == 'ru' or $lang == 'en')
        session()->put('locale', $lang);
    return redirect()->back();
});