<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;

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

Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/about/{numb?}', function($numb = null){
    return view('about', ['n' => $numb]);
})->name('about_numb');

Route::get('/login', [loginController::class, 'login'])->name('login');
Route::post('/login', [loginController::class, 'auth'])->name('user.auth');
Route::post('/reg', [loginController::class, 'reg'])->name('user.reg');
Route::get('/logout', [loginController::class, 'logout'])->name('user.logout');


Route::get('/letters_list', [homeController::class, 'letters_list'])->name('letters.list');
Route::get('/my_letters_list', [homeController::class, 'my_letters_list'])->name('my.letters.list');

Route::get('/letter_compose', [homeController::class, 'letter_compose'])->name('letter.compose')->middleware('auth');
Route::post('/letter_compose', [homeController::class, 'letter_create'])->middleware('auth');
Route::get('/letter_edit/{id}', [homeController::class, 'letter_edit'])->name('letter.edit')->middleware('auth');
Route::post('/letter_update/{id}', [homeController::class, 'letter_update'])->name('letter.update')->middleware('auth');

Route::get('/letter_response/{id}', [HomeController::class, 'letter_response'])->name('letter.response')->middleware('auth');
Route::post('/letter_response/{id}', [HomeController::class, 'letter_send_response'])->name('letter.send.responce')->middleware('auth');
Route::post('/letter_add_gift/{id}', [HomeController::class, 'letter_add_gift'])->name('letter.add_gift')->middleware('auth');

Route::get('/letter_view/{id}', [HomeController::class, 'letter_view'])->name('letter.view')->middleware('auth');