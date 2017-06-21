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

Route::get('/', function () {
    return view('index');
})->name('index');

Auth::routes();

Route::get('/admin/home', 'HomeController@index');
Route::get('/admin/user', 'HomeController@user');

Route::group(['middleware' => ['web', 'auth']], function () {

	//System Parameter
    Route::get('/admin/sysparam', ['as' => 'coop.sysparam', 'uses' => 'SysParamController@index']);
    Route::post('/admin/sysparam/update', ['as' => 'coop.sysparam.update', 'uses' => 'SysParamController@update']);

    //Election
    Route::get('/admin/election', ['as' => 'coop.election', 'uses' => 'ElectionController@index']);
    Route::get('/admin/election/create', ['as' => 'coop.election.create', 'uses' => 'ElectionController@create']);
    Route::post('/admin/election/add-election-info', ['as' => 'coop.election.add.election.info', 'uses' => 'ElectionController@addElectionInfo']);
});
