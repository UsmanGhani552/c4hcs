<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MonthlyController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\TargetController;
use App\Http\Controllers\WeeklyController;
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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/records', [RecordController::class, 'index'])->name('records');
    Route::get('create-record', [RecordController::class, 'create'])->name('create-record');
    Route::post('store-record', [RecordController::class, 'store'])->name('store-record');
    Route::get('edit-record-{record}', [RecordController::class, 'edit'])->name('edit-record');
    Route::post('update-record-{record}', [RecordController::class, 'update'])->name('update-record');
    Route::get('delete-record-{record}', [RecordController::class, 'delete'])->name('delete-record');

    Route::get('/targets', [TargetController::class, 'index'])->name('targets');
    Route::get('/edit-target-{target}', [TargetController::class, 'edit'])->name('edit-target');
    Route::post('/update-target-{target}', [TargetController::class, 'update'])->name('update-target');

    Route::get('/weekly', [WeeklyController::class, 'index'])->name('weekly');
    Route::get('weekly-export',[WeeklyController::class, 'export'])->name('weekly-export');
    
    Route::get('/monthly', [MonthlyController::class, 'index'])->name('monthly');
    Route::get('monthly-export',[MonthlyController::class, 'export'])->name('monthly-export');
});
