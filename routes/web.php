<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/expense', [ExpenseController::class, 'index']);
Route::get('/expense/create', [ExpenseController::class, 'create'])->name('expense.create');
route::post('/expense/store', [ExpenseController::class, 'store'])->name('expense.store');
Route::resource('expense', ExpenseController::class);

Route::get('/laporan', [LaporanController::class, 'index']);

Route::post('/create', [IncomeController::class, 'submit'])->name('button.submit');

Route::get('/dashboard', [DashboardController::class, 'index']) 
   ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth'])->group(function () {
    Route::resource('income', IncomeController::class)->except(['show']);
});

require __DIR__.'/auth.php';
