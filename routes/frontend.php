<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\home;
use App\Http\Controllers\frontend\product;
use App\Http\Controllers\frontend\HomePageController;



Route::get('/', [HomePageController::class,'home'])->name('home');
Route::get('/about-page', [HomePageController::class,'aboutUs'])->name('about_page');
Route::get('/service', [HomePageController::class,'servicePage'])->name('service_page');
Route::get('/service/details/{slug}', [HomePageController::class,'serviceDetailsPage'])->name('service_details');
Route::get('/projects', [HomePageController::class,'projectPage'])->name('project_page');
Route::get('/blogs', [HomePageController::class,'blogPage'])->name('blog_page');
Route::get('/blog/details/{slug}', [HomePageController::class,'blogDetailsPage'])->name('blog_details');
Route::get('/contact', [HomePageController::class,'contact'])->name('contact_page');
Route::post('/contact-form', [HomePageController::class,'contactStore'])->name('contact_form_store');
