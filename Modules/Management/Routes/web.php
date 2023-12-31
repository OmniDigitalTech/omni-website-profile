<?php

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

use Illuminate\Support\Facades\Route;

Route::domain(config('app.sub_domain_management') . '.' . config('app.domain'))->middleware(['auth', 'management'])->group(function () {
    Route::get('/', 'ManagementController@index')->name('management.index');
});
