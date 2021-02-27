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

Auth::routes();
Route::get('/workfh','workfhController@workfh');
Route::get('/workerHome','workerHomeController@workerHome');
Route::get('/clientHome','clientHomeController@clientHome');
Route::get('/post','postController@post');
Route::post('store/post','postController@StorePost')->name('store.post');
Route::get('/submitClientWork','submitClientWorkController@submitClientWork');
Route::post('store/submitClientWork','submitClientWorkController@storepost');
Route::get('/submitMyWork','submitClientWorkController@submitMyWork');
Route::get('/submittedWorkForClient','submitClientWorkController@submittedWork');
Route::get('/allpostForAdmin','allpostController@allpostForAdmin');
Route::get('/allpostForClient','allpostController@allpostForClient');
Route::get('/allpostForWorker','allpostController@allpostForWorker');
Route::get('/allWorkerAccount','allWorkerAccountController@allWorkerAccount');
Route::get('/allClientAccount','allClientAccountController@allClientAccount');
Route::get('/allWorkerAccountForWorker','allWorkerAccountController@allWorkerAccountForWorker');
Route::get('/sendGroupRequest{id}','groupController@sendGroupRequest');
Route::get('/grouprequests','groupController@grouprequests');
Route::get('/confirmGroupRequest{id}','groupController@confirmGroupRequest');
Route::get('/groupMemberForWorker','groupController@groupMemberForWorker');
Route::get('/wonGroupForWorker','groupController@wonGroupForWorker');
Route::get('/removeGroupRequest{id}','groupController@removeGroupRequest');
Route::get('/groupWorker','allWorkerGroupController@groupWorker');
Route::get('/contact','contactController@contact');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/view/singlePost{id}', 'postController@ViewPost')->name('YourPost');
Route::get('/edit/singlePost{id}', 'postController@EditPost')->name('EditPost');
Route::post('/update/post{id}', 'postController@UpdatePost')->name('UpdatePost');
Route::get('/delete/singlePost{id}', 'postController@DeletePost')->name('DeletePost');
Route::get('/admin/dashboard', 'AdminController@getIndex')->name('adminDashboard');
Route::get('/client/dashboard', 'ClientController@getIndex')->name('clientDashboard');
Route::get('/worker/dashboard', 'WorkerController@getIndex')->name('workerDashboard');
