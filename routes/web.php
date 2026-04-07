<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Controllers
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SoundController;

Route::get('/sewa-sound', [SoundController::class, 'index']);

/*
|--------------------------------------------------------------------------
| GUEST ROUTES
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});


/*
|--------------------------------------------------------------------------
| ROOT REDIRECT
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return auth()->check()
        ? redirect()->route('dashboard')
        : redirect()->route('login');
});


/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // ✅ Dashboard (FINAL)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    // USERS
    Route::get('/users', [UsersController::class, 'index'])->name('users.index');

    // PLACEHOLDER
    Route::get('/roles', [DashboardController::class, 'index'])->name('roles.index');
    Route::get('/menus', [DashboardController::class, 'index'])->name('menus.index');
    Route::get('/settings', [DashboardController::class, 'settings'])->name('settings.index');
    Route::get('/sub-menus', [DashboardController::class, 'index'])->name('submenus.index');


    // EQUIPMENT
    Route::prefix('equipment')->name('equipment.')->group(function () {
        Route::get('/', [EquipmentController::class, 'index'])->name('index');
        Route::get('/create', [EquipmentController::class, 'create'])->name('create');
        Route::post('/', [EquipmentController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [EquipmentController::class, 'edit'])->name('edit');
        Route::put('/{id}', [EquipmentController::class, 'update'])->name('update');
        Route::delete('/{id}', [EquipmentController::class, 'destroy'])->name('destroy');
    });

    // BUS
    Route::prefix('bus')->name('bus.')->group(function () {
        Route::get('/', [BusController::class, 'index'])->name('index');
        Route::get('/create', [BusController::class, 'create'])->name('create');
        Route::post('/', [BusController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [BusController::class, 'edit'])->name('edit');
        Route::put('/{id}', [BusController::class, 'update'])->name('update');
        Route::delete('/{id}', [BusController::class, 'destroy'])->name('destroy');
    });

    // PACKAGES
    Route::prefix('packages')->name('packages.')->group(function () {
        Route::get('/', [PackagesController::class, 'index'])->name('index');
        Route::get('/create', [PackagesController::class, 'create'])->name('create');
        Route::post('/', [PackagesController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [PackagesController::class, 'edit'])->name('edit');
        Route::put('/{id}', [PackagesController::class, 'update'])->name('update');
        Route::delete('/{id}', [PackagesController::class, 'destroy'])->name('destroy');
    });

    // RENTAL
    Route::prefix('rental')->name('rental.')->group(function () {
        Route::get('/', [RentalController::class, 'index'])->name('index');
        Route::get('/create', [RentalController::class, 'create'])->name('create');
        Route::post('/', [RentalController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [RentalController::class, 'edit'])->name('edit');
        Route::put('/{id}', [RentalController::class, 'update'])->name('update');
        Route::delete('/{id}', [RentalController::class, 'destroy'])->name('destroy');
    });

    // CUSTOMER
    Route::prefix('customer')->name('customer.')->group(function () {
        Route::get('/', [CustomerController::class, 'index'])->name('index');
        Route::get('/create', [CustomerController::class, 'create'])->name('create');
        Route::post('/', [CustomerController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [CustomerController::class, 'edit'])->name('edit');
        Route::put('/{id}', [CustomerController::class, 'update'])->name('update');
        Route::delete('/{id}', [CustomerController::class, 'destroy'])->name('destroy');
    });

    // REPORT
    Route::prefix('report')->name('report.')->group(function () {
        Route::get('/', [ReportController::class, 'index'])->name('index');
        Route::get('/create', [ReportController::class, 'create'])->name('create');
        Route::post('/', [ReportController::class, 'store'])->name('store');
        Route::get('/{id}/detail', [ReportController::class, 'show'])->name('show');
        Route::delete('/{id}', [ReportController::class, 'destroy'])->name('destroy');
    });

    // PRODUK
Route::prefix('products')->name('products.')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\ProductController::class, 'create'])->name('create');
    Route::post('/', [App\Http\Controllers\ProductController::class, 'store'])->name('store');


});

});