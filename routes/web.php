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

//Route::get('/', 'TrainingRegistrationController@index');
Route::get('/', function() {
  return redirect('/osticket/scp');
});

Route::group(['middleware' => ['web'], 'prefix' => 'training'], function()
//Route::middleware(['web']
    {
        //Route::get('/', 'TrainingRegistrationController@index');
	Route::get('/', function() {
		return redirect('https://docs.google.com/forms/d/e/1FAIpQLSdwlF4yqxk3dZD5WQmZXlX-Dr0xNmHXs95kilkgKuIOfnitjw/viewform');
	});
	
	Route::get('/test', 'TrainingRegistrationController@index');

        Route::post('/registration', 'TrainingRegistrationController@store');
    }
);

