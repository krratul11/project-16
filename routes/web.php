<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'homePage']);
Route::get("/dashboard",[DashbordController::class,'dashbordPage'])-> name('dashboardPage');
Route::get("/categoryPage",[CategoryController::class,'categoryPage'])->name('categoryPage');
Route::get("/productPage",[ProductController::class,'productPage'])->name('productPage');
Route::get("/customerPage",[CustomerController::class,'customerPage'])->name('customerPage');
Route::get("/salePage",[InvoiceController::class,'invoicePage'])->name('invoicePage');
Route::get("/invoicePage",[SalesController::class,'salePage'])->name('salePage');
Route::get("/reportPage",[ReportController::class,'reportPage'])->name('reportPage');
Route::get("/userRegistration",[UserController::class,'registrationPage']);
Route::get("/userLogin",[UserController::class,'loginPage']);
Route::get("/restPassword",[UserController::class,'restPage']);
Route::get("/sendOtp",[UserController::class,'SendOtpPage']);
Route::get("/verifyOtp",[UserController::class,'verifyOtpPage']);
Route::get("/userProfile",[UserController::class,'profilePage']);