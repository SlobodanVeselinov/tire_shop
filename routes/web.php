<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\AdminDashboardController;


//FRONT-LANDING PAGE ROUTE
Route::get('/', [FrontPageController::class, 'index'])->name('welcome');

// Route::get('/view_mail', [FrontPageController::class, 'view_mail']);

// MIDDLEWARE AUTH ROUTE GROUP
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        //Route for displaying the dashboard
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

        //Route for Customer (RESOURCE)
        Route::resource('customer', CustomerController::class);

        //Route for Product (RESOURCE)
        Route::resource('product', ProductController::class);

        //Route for Sale (RESOURCE)
        Route::resource('sale', SaleController::class);

        Route::get('sale/new/{id}', [SaleController::class, 'new_sale'])->name('new_sale');

        // PDF Generating route
        Route::get('sale/generate/pdf/{id}', [SaleController::class, 'download_pdf'])->name('download_pdf');
        Route::get('sale/generate/pdf/payment/{id}', [SaleController::class, 'download_payment_receipt'])->name('download_payment_receipt');

        //Route for Payment (RESOURCE)
        Route::resource('payment', PaymentController::class);

        //Route for Order (RESOURCE)
        Route::resource('order', OrderController::class);

    });
});

require __DIR__.'/auth.php';


