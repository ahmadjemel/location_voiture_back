<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\ReservationController;

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

/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::middleware(['auth'])->group (function(){
//crud car
Route::resource("voiture",VoitureController::class);

//CRUD Client

Route::resource("client",ClientController::class);

//crud employ

Route::resource("employe",EmployeController ::class);

//crud reservation
Route::resource("reservation",ReservationController::class);

//crud reservation
Route::resource("marque",MarqueController::class);
});
//partie de reservation
Route::get('reservation/create/{voiture}', [ReservationController::class,'create'])->name('reservation.create');
Route::get('reservation/reserve', [ReservationController::class,'reserve'])->name('reservation.liste');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
