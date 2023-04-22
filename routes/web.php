<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'actionIndex']);
Route::match(['get', 'post'], '/', [IndexController::class, 'actionIndex']);
?>