<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;









Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/leadership', [PageController::class, 'leadership'])->name('leadership');


// Route::get('/', function () {
//     return view('welcome');
// });
