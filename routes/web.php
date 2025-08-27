<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

//Route::get('/', function () {
//    return view('welcome');
//});



Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.home');
Route::get('/portfolio-services', [PortfolioController::class, 'services'])->name('portfolio.services');
Route::get('/portfolio-resume', [PortfolioController::class, 'resume'])->name('portfolio.resume');
Route::get('/portfolio-portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio.portfolio');
Route::get('/portfolio-contact', [PortfolioController::class, 'contact'])->name('portfolio.emails.contact');
Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "Cache Cleared!";
});
