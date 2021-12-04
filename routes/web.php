<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/cardapio',[HomeController::class,'cardapio'])->name('cardapio');
Route::get('/admin',[HomeController::class,'admin'])->name('admin');
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::get('/reserva',[HomeController::class,'reserva'])->name('reserva');
Route::get('/registoCliente',[HomeController::class,'registoCliente'])->name('registoCliente');
Route::Post('/registarPratos',[HomeController::class,'registarPratos'])->name('registarPratos');
Route::Post('/editarPratos/{id}',[HomeController::class,'editarPratos'])->name('editarPratos');
Route::Get('/editarView/{id}',[HomeController::class,'editarView'])->name('editarView');
Route::Get('/descricaoPrato/{id}',[HomeController::class,'descricaoPrato'])->name('descricaoPrato');
Route::get('delete/{id}',[HomeController::class,'destroy'])->name('destroy');
Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
