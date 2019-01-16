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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',['as'=>'house.index','uses'=> 'AppController@app']);

Route::get('/rentmanager',['as'=>'rentmanager.index','uses'=> 'RentManagerController@rentmanager']);

Route::get('/rent',['as'=>'rent.index','uses'=> 'RentController@rent']);

Route::get('/admin',['as'=>'admin.index','uses'=> 'AdminController@admin']);

Route::get('/cards',['as'=>'cards.index','uses'=> 'CardsController@cards']);

Route::get('/tables',['as'=>'tables.index','uses'=> 'TablesController@tables']);

Route::get('/history',['as'=>'history.index','uses'=> 'HistoryController@history']);

Route::get('/house',['as'=>'house.index','uses'=> 'HouseController@house']);


Route::auth();
Auth::routes();

Route::get('/home', 'HouseController@house')->name('house');

Route::post('/rent',['as' => 'rent.store', 'uses' => 'RentController@store']);
