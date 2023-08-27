<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','pagesController@dashboard')->name('dashboard');
// for employees ..
Route::prefix('employee')->group(function(){
    Route::get('/create','pagesController@new_employee')->name('employee.create');
    Route::get('/all','pagesController@all_employee')->name('all.employee');
    Route::post('/save','pagesController@save_employee')->name('employee.save');
    Route::get('/delete/{id}','pagesController@delete_employee')->name('employee.delete');
    Route::get('/edit/{id}','pagesController@edit_employee')->name('employee.edit');
    Route::post('/update/{id}','pagesController@update_employee')->name('employee.update');
});
// Accounts
Route::prefix('accounts')->group(function(){
    Route::get('/','pagesController@accounts')->name('employee.account');
    Route::get('/current-month','pagesController@current_month_account')->name('month.salary');
});
// settings ..
Route::prefix('users')->namespace('settings')->group(function(){
    Route::get('/settings','settingsController@index')->name('profile.settings');
});
