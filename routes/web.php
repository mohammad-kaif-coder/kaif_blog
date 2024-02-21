<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front_end\AboutController;
use App\Http\Controllers\Front_end\ContactController;
use App\Http\Controllers\Front_end\HomeFController;
use App\Http\Controllers\Front_end\PortfolioController;
use App\Http\Controllers\Front_end\ServicesController;
//admin import
use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServicesPageController;
use App\Http\Controllers\Admin\ContactPageController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\AboutPageController;





Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');

Route::resource('/about', AboutController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/', HomeFController::class);
Route::resource('/portfolio', PortfolioController::class);
Route::resource('/services', ServicesController::class);

//Route::group(['middleware' => 'isAdmin'], function () {
//    Route::get('admin', 'adminController@adminDashboard');
//});

Route::get('/kaif_ji', function () {
    return view('auth.login');
});

Route::resource('homepage', HomepageController::class);
Route::resource('projectpage', ProjectController::class);
Route::resource('servicespage', ServicesPageController::class);

//Route::any('servicespage/{id}/delete', [ServicesPageController::class,'deleteFromShow'])->name('servicespage.deleteFromShow');

Route::resource('contact', ContactPageController::class);
Route::resource('setting', SettingController::class);
Route::resource('profile',ProfileController::class);
Route::resource('aboutpage',AboutPageController::class);


Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => '/' . config('constants.ADMIN_PREFIX')], function () {
        
    });
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

