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
})->name('admin.dashboard');

/*Route::get('/admin/personnel/new', function () {
    return view('admin.personnel.new');
});*/

Route::get('/admin/login', function () {
    return view('admin.login');
});


Route::post('admin/loginAction','UserController@loginAction')->name('loginAction');
Route::get('admin/logoutAction','UserController@logoutAction')->name('logoutAction');

Route::resource('/admin/personnel','PersonnelController');
//Route::post('/admin/personnel', 'PersonnelController@store')->name('personnel.add');
//Route::get('/admin/personnel/list', 'PersonnelController@index')->name('personnel.list');


Route::resource('/admin/news','NewsController');
Route::resource('/admin/place','PlaceController');
Route::resource('/admin/period','PeriodController');
Route::get('/admin/period/{id}/reserviha/{id2}','PeriodController@reservihaShow')->name('periodPlaceReserviha');
Route::resource('/admin/periodPlace','periodPlaceController');
Route::resource('/admin/quota','QuotaController');
Route::resource('/admin/users2','UserController');
//Route::resource('/admin/sp1/{id}','spController@execSP');

Route::get('admin/sp1/{id}','spController@execSP')->name('sp');


Route::get('/personalpage/login', function () {
    return view('personalpage.login');
});


Route::post('personalpage/loginActionGeneralUser','UserController@loginActionGeneralUser')->name('loginActionGeneralUser');
Route::get('personalpage/logoutActionGeneralUser','UserController@logoutActionGeneralUser')->name('logoutActionGeneralUser');

Route::get('/personalpage/dashboard', function () {
    return view('/personalpage/dashboard');
})->name('personalpage.dashboard');
Route::get('personalpage/reservationPlace','PlaceController@reservationPlaceIndex')->name('reservationPlaceIndex');
Route::get('personalpage/serviceReport','ServiceController@serviceUserReportIndex')->name('serviceReport');
Route::get('personalpage/payReport','PayController@payUserReportIndex')->name('payReport');
Route::get('personalpage/creditReport','PayController@creditUserReportIndex')->name('creditReport');

Route::post('/personalpage/reservationPlace/reserve/{id}', 'PlaceController@reservePlaceAction')->name('reservePlaceAction');

Route::resource('/personalpage/family','FamilyController');

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
