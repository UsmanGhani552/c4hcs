<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MonthlyController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TargetController;
use App\Http\Controllers\UserController;
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
    //records
    Route::get('/records', [RecordController::class, 'index'])->name('records');
    Route::get('create-record', [RecordController::class, 'create'])->name('create-record');
    Route::post('store-record', [RecordController::class, 'store'])->name('store-record');
    Route::get('edit-record-{record}', [RecordController::class, 'edit'])->name('edit-record');
    Route::post('update-record-{record}', [RecordController::class, 'update'])->name('update-record');
    Route::get('delete-record-{record}', [RecordController::class, 'delete'])->name('delete-record');

    //targets
    Route::get('/targets', [TargetController::class, 'index'])->name('targets');
    Route::get('/edit-target-{target}', [TargetController::class, 'edit'])->name('edit-target');
    Route::post('/update-target-{target}', [TargetController::class, 'update'])->name('update-target');

    //weekly
    Route::get('/weekly', [WeeklyController::class, 'index'])->name('weekly');
    Route::get('weekly-export',[WeeklyController::class, 'export'])->name('weekly-export');

    //monthly
    Route::get('/monthly', [MonthlyController::class, 'index'])->name('monthly');
    Route::get('monthly-export',[MonthlyController::class, 'export'])->name('monthly-export');

    Route::controller(PermissionController::class)->name('permission.')->group(function () {
        Route::get('permissions', 'index')->name('index');
        Route::get('permission-create', 'create')->name('create');
        Route::post('permission-store', 'store')->name('store');
        Route::get('permission-edit-{permission}', 'edit')->name('edit');
        Route::post('permission-update-{permission}', 'update')->name('update');
        Route::get('permission-destroy-{permission}', 'destroy')->name('destroy');
    });

    Route::controller(RoleController::class)->name('role.')->group(function () {
        Route::get('roles', 'index')->name('index');
        Route::get('role-create', 'create')->name('create');
        Route::post('role-store', 'store')->name('store');
        Route::get('role-edit-{role}', 'edit')->name('edit');
        Route::post('role-update-{role}', 'update')->name('update');
    });

    Route::controller(UserController::class)->name('user.')->group(function () {
        Route::get('users', 'index')->name('index');
        Route::get('user-create', 'create')->name('create');
        Route::post('user-store', 'store')->name('store');
        Route::get('user-edit-{user}', 'edit')->name('edit');
        Route::post('user-update-{user}', 'update')->name('update');
        Route::post('user-delete-{user}', 'delete')->name('delete');
    });

    // Route::controller(AddAdminController::class)->prefix('/admin/add-admin')->name('add-admin.')->group(function () {
    //     Route::get('/', 'index')->name('index');
    //     Route::get('/create', 'create')->name('create');
    //     Route::post('/store', 'store')->name('store');
    //     Route::get('/edit/{addAdmin}', 'edit')->name('edit');
    //     Route::post('/update/{addAdmin}', 'update')->name('update');
    //     Route::get('/destroy/{addAdmin}', 'destroy')->name('destroy');
    // });
});
