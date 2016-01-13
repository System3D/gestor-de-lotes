<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', 'DashboardController@dashboard');
Route::get('/teste', function () {
	return "Yeahh!!!";
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
 */

Route::group(['middleware' => ['web']], function () {

	Route::resource('/lotes/pecas', 'PecasController');
	Route::resource('/lotes', 'LotesController');

	Route::resource('/obras', 'ObrasController');
	Route::resource('/obras/{obra_id}/etapas', 'EtapasController');
	Route::resource('/obras/{obra_id}/etapas/{etapa_id}/handles', 'HandlesController');
	Route::resource('/obras/{obra_id}/etapas/{etapa_id}/pecas', 'PecasController');
	Route::resource('/obras/{obra_id}/etapas/{etapa_id}/lotes', 'LotesController');

});
