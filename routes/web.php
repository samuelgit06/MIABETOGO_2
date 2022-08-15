<?php

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\etablissement;
use App\Http\Controllers\EtablissementController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
Route::get('/ajout_etablissement', function () {
    return view('ajout_etablissement');
});
Route::get('/index_voiture', function () {
    return view('index_voiture');
});
Route::get('/verifier', function () {
    return view('verifier');
});
Route::get('/enregistrement ', function () {
    return view('enregistrement');
});
Route::get('/lieux', function () {
    return view('lieux');
});
Route::get('/tourisme', function () {
    return view('index_tourisme ');
});
Route::get('/verifier', function () {
    return view('verifier ');
});
Route::get('/user_page', function () {
    return view('page_modification_user ');
});
Route::get('/reservation', function () {
    return view('reservation');
});


Route::get('admin/user', [UserController::class, 'index']);
Route::namespace('App\Http\Controllers\admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('user','UserController');
});
