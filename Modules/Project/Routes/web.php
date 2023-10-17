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

    Route::prefix('project')->group(function (){
        Route::get('/', 'ProjectController@index')->name('management.project.index');
        Route::get('/create', 'ProjectController@create')->name('management.project.create');
        Route::post('/store', 'ProjectController@store')->name('management.project.store');
        Route::get('/overview/{project}', 'ProjectController@overview')->name('management.project.overview');

        Route::prefix('invoice')->group(function (){
            Route::get('/create/{project}', 'InvoiceController@create')->name('management.project.invoice.create');
            Route::post('/store/{project}', 'InvoiceController@store')->name('management.project.invoice.store');
        });

        Route::prefix('subscription')->group(function (){
            Route::post('/store/{project}', 'SubscriptionController@store')->name('management.project.subscription.store');
        });
    });
Route::domain(config('app.sub_domain_management') . '.' . config('app.domain'))->middleware(['auth', 'management'])->group(function () {
});
