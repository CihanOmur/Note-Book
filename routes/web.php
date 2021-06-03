<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
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

Route::get('/',[PagesController::class,'index'])->name('index');
Route::get('/add-note',[PagesController::class,'add_note'])->name('add_note');
Route::get('/trash',[PagesController::class,'trash'])->name('trash');
Route::get('/show/{Note}',[PagesController::class,'show'])->name('show');
Route::post('/not-eklendi',[PagesController::class, 'add'])->name('add');
Route::get('/design/{Note}',[PagesController::class,'design'])->name('design');
Route::get('/design/{Note}/changed',[PagesController::class,'changed'])->name('changed');
Route::get('/delete/{Note}',[PagesController::class,'delete'])->name('delete');
Route::get('/restore/{Note}',[PagesController::class,'restore'])->name('restore');

