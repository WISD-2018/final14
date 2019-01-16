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

Route::get('/',['as'=>'app.index','uses'=> 'AppController@app']);

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

Route::get('/rentmanager' , ['as' => 'rentmanager.index' , 'uses' => 'RentManagerController@index']);

Route::post('/rent',['as' => 'rent.store', 'uses' => 'RentController@store']);

Route::delete('rentmanager/{id}',['as'=>'rentmanager.destroy','uses'=>'RentManagerController@destroy']);

//采風堂
Route::get('/one',['as'=>'one.index','uses'=> 'OneController@one']);

Route::get('/one',['as'=>'one.index','uses'=> 'OneController@index']);

Route::delete('/one/{id}',['as'=>'one.destroy','uses'=> 'OneController@destroy']);

//匯川堂
Route::get('/two',['as'=>'two.index','uses'=> 'TwoController@one']);

Route::get('/two',['as'=>'two.index','uses'=> 'TwoController@index']);

Route::delete('/two/{id}',['as'=>'two.destroy','uses'=> 'TwoController@destroy']);