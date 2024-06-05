<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Front\Home;
use App\Livewire\Front\AboutUs;
use App\Livewire\Front\Hosting;
use App\Livewire\Front\Domain;
use App\Livewire\Front\WebApps;
use App\Livewire\Front\Contact;
use App\Livewire\Front\Auth\Login;
use App\Livewire\Front\Auth\Signup;
use App\Livewire\Front\Cart;
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

Route::get('/',Home::class);
Route::get('/about-us', AboutUs::class);
Route::get('/hosting', Hosting::class);
Route::get('/domain', Domain::class);
Route::get('/web-apps', WebApps::class);
Route::get('/contact', Contact::class);
Route::get('/login', Login::class);
Route::get('/sign-up', Signup::class);
Route::get('/cart', Cart::class);
