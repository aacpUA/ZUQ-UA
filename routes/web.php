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

/**
 * Unauthenticated Routes
 */


Route::get('/', 'MainController@index')->name('index');

Route::get('/main', 'MainController@highlights')->name('highlights');

Route::get('/explorar', 'InstitutionController@index')->name('index');

Route::get('/explorar/lista', 'InstitutionController@explore')->name('explore');

Route::get('/explorar/find', 'InstitutionController@find')->name('explore.find');
Route::view('/destaques/aluno', 'destaques.aluno');

/**
 *  Auth & Registration
 */
Auth::routes();

/**
 * Authenticated only Routes
 */
Route::get('/home', 'HomeController@index')->name('home');

/**
 * Backoffice Routes
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Backoffice', 'middleware' => ['auth', 'role:admin|manager']],
    function()
    {
        Route::get('/', 'DashboardController@index')->name('admin');

        Route::resource('user', 'UserController');
    }
);
