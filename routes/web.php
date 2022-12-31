<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\AdminHomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [HomeController::class, 'index']);




Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('index');
Route::post('get_data_by_id', [HomeController::class, 'get_data_by_id'])->name('get_data_by_id');


Route::get('send-email-pdf', [HomeController::class, 'send']);
Route::post('save-data', [HomeController::class, 'saveData']);
Route::get('trips/details/{id}', [\App\Http\Controllers\TripController::class, 'trip']);

Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');


Route::group(['namespace' => 'Admin'],function () {
    Route::get('admin/home', 'AdminHomeController@index')->name('admin.dashboard');
    Route::get('admin/sliders', 'AdminSliderController@index');
    Route::get('admin/sliders/edit/{id}', 'AdminSliderController@edit');
    Route::post('admin/sliders/update', 'AdminSliderController@update');
    //setting
    Route::get('admin/setting', 'AdminSettingController@edit');
    Route::post('admin/setting/update', 'AdminSettingController@update');
//    //email
//    Route::get('admin/regret/{id}', 'AdminEmailController@regret_letter')->name('admin.regret_letter');

    Route::get('admin/trips', 'AdminTripController@index');
    Route::get('admin/trips/create', 'AdminTripController@create');
    Route::post('admin/trips/store', 'AdminTripController@store');
    Route::get('admin/trips/edit/{id}', 'AdminTripController@edit');
    Route::post('admin/trips/update', 'AdminTripController@update');


});
//change language
Route::get('/change-language/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'fr'])) {
        abort(404);
    }
    App::setLocale($locale);
    // Session
    session()->put('locale', $locale);

    return redirect()->back();
});
Auth::routes();
