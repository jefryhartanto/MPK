<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::group(['prefix' => 'admin'], function(){
    Route::get('/','AdminController@index');
    Route::get('data-pegawai','AdminController@dataPegawai');
    Route::get('data-produk','AdminController@dataProduk');
    Route::get('data-pemesanan','AdminController@dataPemesanan');
    Route::get('data-penjualan','AdminController@dataPenjualan');
    Route::get('user-account','AdminController@dataUser');

});
Route::group(['prefix' => 'pimpinan'], function(){
    Route::get('/','PimpinanController@index');
    Route::get('data-pegawai','PimpinanController@dataPegawai');
    Route::get('data-pegawai-cetak/{id}','PimpinanController@dataPegawaiCetak');
    Route::get('data-produk','PimpinanController@dataProduk');
    Route::get('data-pemesanan','PimpinanController@dataPemesanan');
    Route::get('data-pemesanan-cetak','PimpinanController@dataPemesananCetak');
    Route::get('data-penjualan','PimpinanController@dataPenjualan');
    Route::get('data-penjualan-cetak','PimpinanController@dataPenjualanCetak');
    Route::get('user-account','PimpinanController@dataUser');

});

Route::group(['prefix'=>'api'], function (){
    /**
     * Route for API Controller
     */
    Route::post('pegawai-create','ApiController@pegawaiCreate');
    Route::post('pegawai-update','ApiController@pegawaiUpdate');
    Route::get("pegawai-detail/{id}","ApiController@getDetailPegawai");
    Route::get('pegawai-delete/{id}','ApiController@pegawaiDelete');
    Route::post('produk-create','ApiController@produkCreate');
    Route::get("produk-detail/{id}","ApiController@getDetailProduk");
    Route::post('produk-update','ApiController@produkUpdate');
    Route::get('produk-delete/{id}','ApiController@produkDelete');
    Route::post('pesan-create','ApiController@pesanCreate');
    Route::get("pesan-detail/{id}","ApiController@getDetailPesan");
    Route::post('pesan-update','ApiController@pesanUpdate');
    Route::get('pesan-delete/{id}','ApiController@pesanDelete');
    Route::get("penjualan-detail/{id}","ApiController@getDetailPenjualan");
    Route::post('penjualan-create','ApiController@penjualanCreate');
    Route::get('penjualan-delete/{id}','ApiController@penjualanDelete');
    Route::post('user-create','ApiController@userCreate');
    
});

Route::group(['prefix'=>'api'], function(){
    Route::get('/','AdminController@index');
    Route::get('detail-pegawai','AdminController@detailPegawai');
    
});