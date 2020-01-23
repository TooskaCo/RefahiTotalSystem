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
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('/admin/dashboard');
})->name('admin.dashboard');;

/*Route::get('/admin/personnel/new', function () {
    return view('admin.personnel.new');
});*/

Route::resource('/admin/personnel','PersonnelController');
//Route::post('/admin/personnel', 'PersonnelController@store')->name('personnel.add');
//Route::get('/admin/personnel/list', 'PersonnelController@index')->name('personnel.list');


Route::resource('/admin/news','NewsController');
Route::resource('/admin/place','PlaceController');
Route::resource('/admin/period','PeriodController');
Route::resource('/admin/quota','QuotaController');

Route::get('/home','HomeController@index'); 
/*Route::get('/home', function () {
    //return view('index')->with('var','test');
    //return view('index',['var'=>'test']);
    $var = 'test' ;
    $var2 = 'test2';
    return view('index',compact('var','var2'));
});*/

Route::resource('/category','CategoryController');
Route::fallback(function(){
    return "404| Not Fount Request Page...";
});
