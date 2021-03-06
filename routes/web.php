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
Route::get('/admin', ['as' => 'admin.index', 'uses' => 'AdminController@Show']);

//Route::post('/rents', 'AdminController@update');
Route::get('/completed',['as' => 'admin.status', 'uses' => 'AdminController@completed']);

Route::get('/cards',['as'=>'cards.index','uses'=> 'CardsController@cards']);

Route::get('/history',['as'=>'history.index','uses'=> 'HistoryController@history']);
Route::get('/history', ['as' => 'history.index', 'uses' => 'HistoryController@Show']);

Route::get('/house',['as'=>'house.index','uses'=> 'HouseController@house']);

Route::auth();
Auth::routes();

Route::get('/home', 'HouseController@house')->name('house');

Route::get('/rentmanager' , ['as' => 'rentmanager.index' , 'uses' => 'RentManagerController@index']);

Route::post('/rent',['as' => 'rent.store', 'uses' => 'RentController@store']);

Route::delete('rentmanager/{id}',['as'=>'rentmanager.destroy','uses'=>'RentManagerController@destroy']);
Route::delete('admin/{id}',['as'=>'admin.destroy','uses'=>'AdminController@destroy']);

//采風堂
Route::get('/one',['as'=>'one.index','uses'=> 'OneController@one']);
Route::get('/one' , ['as' => 'one.index' , 'uses' => 'OneController@index']);
//采風堂-admin
Route::get('/admin.one',['as'=>'admin.one.index','uses'=> 'OneController@admin.one']);
Route::get('/admin.one' , ['as' => 'admin.one.index' , 'uses' => 'OneController@show']);

//匯川堂
Route::get('/two',['as'=>'two.index','uses'=> 'TwoController@two']);
Route::get('/two' , ['as' => 'two.index' , 'uses' => 'TwoController@index']);
//匯川堂-admin
Route::get('/admin.two',['as'=>'admin.two.index','uses'=> 'TwoController@admin.two']);
Route::get('/admin.two' , ['as' => 'admin.two.index' , 'uses' => 'TwoController@show']);
