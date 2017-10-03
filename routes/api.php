<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// create form
Route::post('/form', [
	'uses' => 'FormController@postForm'
]);

// get all forms
Route::get('/forms', [
	'uses' => 'FormController@getForms'
]);

// update form
// {@param} => id
Route::put('/form/{id}', [
	'uses' => 'FormController@putForm'
]);

// delete form
// {@param} => id
Route::delete('/form/{id}', [
	'uses' => 'FormController@deleteForm'
]);

// {@param} => id
Route::get('/form/pdf/{id}', [
	'uses' => 'FormController@downloadForm'
]);