<?php

use Illuminate\Support\Facades\Route;

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
Route::post('get-signature', 'App\Http\Controllers\AgreementFormController@get_signature');
//Route::post('get-signature', [AgreementFormController::class, 'get_signature']);
Route::post('/AgreementForm-Create', [AgreementFormController::class, 'store']);



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
