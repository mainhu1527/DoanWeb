<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/data', function()
{
    return View::make('templates.passdata');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function (){
    return view('Pages.about');
});
Route::get('/delivery', function (){
    return view('Pages.delivery');
});
Route::get('/contact', function (){
    return view('Pages.contact');
});
Route::get('/index',['as'=>'Pages.index', 'uses'=>'PagesController@index']);
Route::get('/preview--{id}','PagesController@preview');
Route::get('search', function (){
    return View::make('Pages.search');
});
Route::group(['middleware' =>'auth'],function(){
    Route::get('changepassword',['as'=>'Pages.changepassword', 'uses'=>'PagesController@getchangepassword']);
    Route::post('changepassword','PagesController@postchangepassword');

});
Route::group(['middleware' =>'admin'],function(){
    Route::get('edit',['as'=>'Pages.edit', 'uses'=>'PagesController@getedit']);
    Route::post('edit','PagesController@postedit');
    Route::get('editaccount',['as'=>'Pages.editaccount', 'uses'=>'PagesController@editaccount']);
    Route::get('/add',['as'=>'Pages.getadd', 'uses'=>'PagesController@getadd']);
    Route::post('add', ['as'=>'Pages.postadd', 'uses'=>'PagesController@postadd']);
    Route::get('/delete/{id}',['as'=>'Pages.delete', 'uses'=>'PagesController@getdelete']);
    Route::get('editproduct--{id}',['as'=>'Pages.geteditproduct', 'uses'=>'PagesController@geteditproduct']);
    Route::post('editproduct/{id}',['as'=>'Pages.posteditproduct', 'uses'=>'PagesController@posteditproduct']);
});
Route::get('/product', 'PagesController@product');
Route::get('/product--{id}', 'PagesController@product2');
Route::get('/search', 'PagesController@search');


Auth::routes();
Route::auth();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
