<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\InquaryController;
use App\Http\Controllers\PackageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {

     Route::controller(AdminController::class)->group(function () {
                Route::get('login', 'adminLogin')->name('adminLogin');
                Route::post('validate/login', 'adminValidateLogin')->name('adminValidateLogin');
        //     Route::post('update/{survey:uuid}', 'update');
        //     Route::get('show/{survey:uuid}', 'show');
        //     Route::get('cheak/status/{survey:uuid}', 'cheakStatus');
         });

         Route::controller(InquaryController::class)->group(function () {
            Route::post('inquire/store', 'store')->name('admin-inquire.store');
        });

    Route::middleware(['auth:admin'])->group(function () {

        Route::controller(AdminController::class)->group(function () {
            Route::get('dashboard', 'dashboard')->name('admin.dashboard');
            Route::get('admin/profile', 'getProfile')->name('admin.getProfile');
            Route::put('admin/profile/{admin}/update', 'updateProfile')->name('admin.updateProfile');
            Route::get('logout', 'logout')->name('admin.logout');

        });

        Route::controller(PackageController::class)->group(function () {
            Route::get('package/index', 'index')->name('admin-package.index');
            Route::get('package/create', 'create')->name('admin-package.create');
            Route::post('package/store', 'store')->name('admin-package.store');
            Route::get('package/{package}/edit', 'edit')->name('admin-package.edit');
            Route::put('package/{package}/update', 'update')->name('admin-package.update');
            Route::delete('package/{package}/destroy', 'destroy')->name('admin-package.destroy');
        });


        Route::controller(AreaController::class)->group(function () {
            Route::get('area/index', 'index')->name('admin-area.index');
            Route::get('area/create', 'create')->name('admin-area.create');
            Route::post('area/store', 'store')->name('admin-area.store');
            Route::get('area/{area}/edit', 'edit')->name('admin-area.edit');
            Route::put('area/{area}/update', 'update')->name('admin-area.update');
            Route::delete('area/{area}/destroy', 'destroy')->name('admin-area.destroy');
        });


        Route::controller(InquaryController::class)->group(function () {
            Route::get('inquire/index', 'index')->name('admin-inquire.index');
            Route::get('inquire/see/all', 'seeAllNotification')->name('admin-inquire.seeAllNotification');
            Route::get('inquire/single/{notificationID}', 'seeSingleNotification')->name('admin-inquire.seeSingleNotification');
            Route::delete('inquire/{inquary}/destroy', 'destroy')->name('admin-inquire.destroy');
        });

    });

});
