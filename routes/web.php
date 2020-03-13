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
});

Route::get('/workfh','workfhController@workfh');
Route::get('/workerHome','workerHomeController@workerHome');
Route::get('/clientHome','clientHomeController@clientHome');
Route::get('/post','postController@post');
Route::post('store/post','postController@StorePost')->name('store.post');
Route::get('/allpostForAdmin','allpostController@allpostForAdmin');
Route::get('/allpostForClient','allpostController@allpostForClient');
Route::get('/allpostForWorker','allpostController@allpostForWorker');
Route::get('/allWorkerAccount','allWorkerAccountController@allWorkerAccount');
Route::get('/allClientAccount','allClientAccountController@allClientAccount');
Route::get('/contact','contactController@contact');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/views/singlePost{id}', 'postController@ViewPost')->name('YourPost');

Route::get('/admin/dashboard', 'AdminController@getIndex')->name('adminDashboard');

Route::get('/client/dashboard', 'ClientController@getIndex')->name('clientDashboard');

Route::get('/worker/dashboard', 'WorkerController@getIndex')->name('workerDashboard');
