<?php

use App\Http\Livewire\App;
use App\Http\Livewire\Components\LoginForm;
use App\Http\Livewire\Components\RegisterForm;
use App\Http\Livewire\Components\Dashboard;
use App\Http\Livewire\NewArticle;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', App::class)->name('home');

Route::get('/register', RegisterForm::class)->name('register');
Route::get('/login', LoginForm::class)->name('login');

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('new-article', NewArticle::class)->name('newArticle');
});
