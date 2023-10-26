<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;



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

Route::middleware(['auth'])->group(function () {

    Route::get('ManageCategories', [MainController::class, 'ManageCategories'])->name('ManageCategories');


    Route::get('dashboard', [MainController::class, 'AfriChildHub'])->name('dashboard');


    Route::get('/', [MainController::class, 'AfriChildHub'])->name('home');


    Route::get('AfriChildHub', [MainController::class, 'AfriChildHub'])->name('AfriChildHub');



    Route::get('DeleteData/{id}/{TableName}', [CrudController::class, 'DeleteData'])->name('DeleteData');
    Route::post('MassUpdate', [CrudController::class, 'MassUpdate'])->name('MassUpdate');
    Route::post('MassInsert', [CrudController::class, 'MassInsert'])->name('MassInsert');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
