<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\slider;
use App\Http\Controllers\backend\product;
use App\Http\Controllers\backend\FaqController;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\TeamController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\AgreementTypeController;
use App\Http\Controllers\backend\AgreementProcedureController;

Route::controller(AuthController::class)->group(function(){
    Route::get('/admin', 'admin')->name('admin');
    Route::post('/authCheck', 'authCheck')->name('authCheck');

});


Route::group(['middleware' => 'admin'], function(){
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/profile', [DashboardController::class, 'profilePage'])->name('user_profile');
    Route::post('update-password', [DashboardController::class, 'updatePassword'])->name('update_password');
    Route::post('user-details', [DashboardController::class, 'updateUserDetails'])->name('update_user_details');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('users', UserController::class);

    Route::get('social/setting', [SettingController::class, 'social'])->name('social_link');
    Route::get('pricing/setting', [SettingController::class, 'pricing'])->name('pricing_setting');
    Route::get('settings', [SettingController::class, 'settingPage'])->name('settings');
    Route::post('logo-medias/upload', [SettingController::class, 'store'])->name('logo_media_upload');

    Route::get('home/index', [HomeController::class, 'sliderSectionAdd'])->name('home_index');
    Route::post('home/store', [HomeController::class, 'sliderSectionStore'])->name('home_store');

    Route::get('about-us', [HomeController::class, 'aboutUsAdd'])->name('about_us');
    Route::post('about-us-store', [HomeController::class, 'aboutUsAddStore'])->name('about_us_store');

    Route::get('faqs', [FaqController::class, 'faqHeaderAdd'])->name('faq_add');
    Route::post('faqs-store', [FaqController::class, 'faqHeaderUpdate'])->name('faq_update');

    Route::get('/contact/list', [DashboardController::class, 'contactList'])->name('contact_list');
    Route::get('/contact/details/{id}', [DashboardController::class, 'contactDetails'])->name('contact_details');

    Route::resource('services', ServiceController::class);
    Route::resource('faq', FaqController::class);
    Route::resource('team', TeamController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('agreement', AgreementTypeController::class);
    Route::resource('agreement-procedure', AgreementProcedureController::class);

});
