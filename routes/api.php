<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelControllers\TestController;

Route::post('/post-product', [TestController::class, 'PostProduct']);
Route::post('/post-contractor', [TestController::class, 'PostContractor']);
Route::post('/post-receipt-invoice', [TestController::class, 'PostReceiptInvoice']);
