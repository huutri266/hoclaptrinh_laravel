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

//Route::get('/', function () {
//    return view('welcome');
//});
Auth::routes();

route::get('taotaikhoangiaovien', function(){
    return view('auth/makeGiaovien');
})->name('makegiaovien');


route::get('/', 'welcomeController@index')->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');
////
/// show nhung phien da tham gia
route::get('dathamgia', 'HomeController@phienDaThamgia')->name('dathamgia');
/// show nhung phien sapw dien ra
route::get('phienSaptoi', 'HomeController@phienSaptoi')->name('phienSaptoi');
///
/// tao phien
route::get('/taophien', 'taophienController@index')->name('taophien');

route::post('taophien.store','taophienController@store')->name('taophien.store');

///////////
/// show phien
route::get('showphien/{id}', 'showphienController@index')->name('showphien');
///
route::get('showphienNotUser/{id}', 'showphienController@indexNotUser')->name('showphienNotUser');
///out phien
route::get('outphien/{id}', 'showphienController@outphien')->name('outphien');
/// nhap pass cho phien
route::get('passOfPhien/{id}', 'showphienController@password')->name('passOfPhien');

route::post('showphienPass/{id}', 'showphienController@showphienPass')->name('showphienPass');

route::post('showphienPassNotUser/{id}', 'showphienController@showphienPassNotUser')->name('showphienPassNotUser');

// dat cau hoi trong phien hoi dap
route::post('datcauhoi/{id}', 'datcauhoiController@index')->name('datcauhoi');
///////show tra loi
///
route::get('showTraloi/{id}', 'showTraloiController@index')->name('showTraloi');

route::post('traloicauhoi/{id}', 'traloiController@index')->name('traloicauhoi');

route::get('xoaTraloi/{id}', 'traloiController@xoa')->name('xoaTraloi');
/////--------------------------------------------------------------------
/// khaor sart
Route::get('/home2', 'Home2Controller@index')->name('home2');

//show nhugn phien khao sat da tham gia

route::get('dathamgiaKhaosat', 'Home2Controller@phienDaThamgia')->name('phienKhaosatDaThamgia');

route::get('/taophien2', 'taophien2Controller@index')->name('taophien2');

route::post('taophien2.store','taophien2Controller@store')->name('taophien2.store');




///// phieu khao sat
///
route::get('/showphieukhaosat/{id}', 'showPhieukhaosatController@index')->name('showphieukhaosat');

///////////out phien khao sat
route::get('outphienluachon/{id}', 'showPhieukhaosatController@outphien')->name('outphienluachon');
/////
route::get('/thongke/{id}', 'showPhieukhaosatController@thongke')->name('thongke');

route::post('taocauhoi.store/{id}','taophien2Controller@taocauhoi')->name('taocauhoi.store');

route::post('taocauhoiYN.store/{id}','taophien2Controller@taocauhoiYN')->name('taocauhoiYN.store');

route::post('taocauhoiTxt.store/{id}','taophien2Controller@taocauhoiTxt')->name('taocauhoiTxt.store');


// nhap mat khau phien khao sat
route::get('passOfPhienKhaosat/{id}', 'showPhieukhaosatController@password')->name('passOfPhienKhaosat');

route::post('showphienKhaosatPass/{id}', 'showPhieukhaosatController@showphienPass')->name('showphienKhaosatPass');
///
/// gui phieu tra loi
route::post('guiphieu/{id}','guiPhieutraloiController@index')->name('guiphieu');



////////// tim kiem
route::post('tiemkiemPhienHoidap', 'timkiemController@phienHoidap')->name('timkiemPhienHoidap');

route::post('tiemkiemPhienLuachon', 'timkiemController@phienLuachon')->name('timkiemPhienLuachon');
