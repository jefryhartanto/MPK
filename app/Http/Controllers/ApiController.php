<?php

namespace App\Http\Controllers;

use App\data_anggota;
use App\data_pesan;
use App\data_produk;
use App\data_penjualan;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class ApiController extends Controller
{
    function standardAPI($data, $message, $status)
    {
        $res = array("data" => $data, "message" => $message, "status" => $status);
        return response()->json($res);
    }

    function pegawaiCreate(Request $request)
    {

        $model = new data_anggota();
        $model->nama = $request->nama;
        $model->tanggal_lahir = $request->tanggal_lahir;
        $model->kelamin = $request->kelamin;
        $model->alamat = $request->alamat;
        $model->no_hp = $request->no_hp;
        $model->data_cv_id = $request->data_cv_id;
        $model->no_rekening = $request->no_rekening;
        $model->created_at = date("Y-m-d H:i:s");

        $model->save();

        return redirect("admin/data-pegawai");
    }

    function pegawaiUpdate(Request $request)
    {
        $model = data_anggota::find($request->id);
        $model->nama = $request->nama;
        $model->tanggal_lahir = $request->tanggal_lahir;
        $model->kelamin = $request->kelamin;
        $model->alamat = $request->alamat;
        $model->no_hp = $request->no_hp;
        $model->data_cv_id = $request->data_cv_id;
        $model->no_rekening = $request->no_rekening;
        $model->updated_at = date("Y-m-d H:i:s");

        $model->save();

        return redirect("admin/data-pegawai");
    }

    function pegawaiDelete($id)
    {
        data_anggota::destroy($id);
        return redirect("admin/data-pegawai");
    }

    function produkCreate(Request $request)
    {

        $model = new data_produk();
        $model->nama = $request->nama;
        $model->harga = $request->harga;
        $model->data_cv_id = $request->data_cv_id;
        $model->created_at = date("Y-m-d H:i:s");

        $model->save();

        return redirect("admin/data-produk");
    }

    function getDetailProduk($id){
        return data_produk::find($id);
    }

    function produkUpdate(request $request){
        {
            $model = data_produk::find($request->id);
            $model->nama = $request->nama;
            $model->harga = $request->harga;
            $model->data_cv_id = $request->data_cv_id;
            $model->updated_at = date("Y-m-d H:i:s");

            $model->save();

            return redirect("admin/data-produk");
        }
    }
    function produkDelete($id)
    {
        data_produk::destroy($id);
        return redirect("admin/data-produk");
    }

    function pesanCreate(Request $request)
    {

        $model = new data_pesan();
        $model->jumlah_pesan = $request->jumlah_pesan;
        $model->produk_id = $request->produk_id;
        $model->created_at = date("Y-m-d H:i:s");

        $model->save();

        return redirect("admin/data-pemesanan");

    }

    function pesanDelete($id)
    {
        data_pesan::destroy($id);
        return redirect("admin/data-pemesanan");
    }

    function getDetailPesan($id){
        return data_pesan::find($id);
    }

    function pesanUpdate(Request $request){
        $model = data_pesan::find($request->id);
        $model->jumlah_pesan = $request->jumlah_pesan;
        $model->produk_id = $request->produk_id;
        $model->created_at = date("Y-m-d H:i:s");

        $model->save();

        return redirect("admin/data-pemesanan");
    }

    function penjualanCreate(Request $request)
    {

        $model = new data_penjualan();
        $model->produk_id = $request->produk_id;
        $model->jumlah_pesanan = $request->jumlah_pesanan_id;
        //$model->total_harga = $request->total_harga;
        $model->customer = $request->customer;
        $model->created_at = date("Y-m-d H:i:s");

        $model->save();

        return redirect("admin/data-penjualan");
    }

    function penjualanDelete($id)
    {
        data_penjualan::destroy($id);
        return redirect("admin/data-penjualan");
    }

    function getDetailPenjualan($id){
        $data = data_penjualan::all()->find($id);
        return $data;
    }

    function getDetailPegawai($id){
        $data = data_anggota::getDetailPegawai($id);
        return $data;
    }
    
    function userCreate(Request $request){
        $model = new User();
        $model->name = $request->name;
        $model->email = $request->email;
        $model->username = $request->username;
        $model->role = $request->role;
        $model->password = bcrypt($request->password);
        $model->created_at = date("Y-m-d H:i:s");

        $model->save();

        return redirect("admin/user-account");
    }
    
    function userRead(){
        
    }
    
    function userUpdate(){
        
    }
    
    function userDelete(){
        
    }

}