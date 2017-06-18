<?php

namespace App\Http\Controllers;


use App\data_anggota;
use App\data_cv;
use App\data_penjualan;
use App\data_pesan;
use App\data_produk;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PimpinanController extends Controller
{
    function index()
    {
        $role = Auth::user()->role;
        if ($role == 1) {
            return view('pimpinan.index');
        } else {
            return view('errors.503');
        }
    }

    function dataPegawai()
    {
        $role = Auth::user()->role;
        if ($role == 1) {
            $model = data_anggota::getAllPegawai();
            $dataCV = data_cv::all();
            return view('pimpinan.data-pegawai')->with(['model' => $model, 'dataCV' => $dataCV]);
        } else {
            return view('errors.503');
        }
    }

    function dataPegawaiCetak($id){
        $role = Auth::user()->role;
        if ($role == 1) {
            $model = data_anggota::all()->find($id);
            $cv_id = $model->data_cv_id;
            $dataCV = data_cv::all()->find($cv_id);
            return view('pimpinan.data-pegawai-cetak')->with(['model' => $model, 'dataCV' => $dataCV]);
        } else {
            return view('errors.503');
        }
    }

    function detailPegawai()
    {
        $role = Auth::user()->role;
        if ($role == 1) {
            return view('pimpinan.detail-pegawai');
        } else {
            return view('errors.503');
        }
    }

    function dataProduk()
    {
        $role = Auth::user()->role;
        if ($role == 1) {
            $model = data_produk::getAllProduk();
            $dataCV = data_cv::all();
            return view('pimpinan.data-produk')->with(['model' => $model, 'dataCV' => $dataCV]);
        } else {
            return view('errors.503');
        }

    }

    function detailProduk()
    {
        $role = Auth::user()->role;
        if ($role == 1) {
            return view('pimpinan.detail-produk');
        } else {
            return view('errors.503');
        }

    }

    function dataPemesanan()
    {

        $role = Auth::user()->role;
        if ($role == 1) {
            $model = data_pesan::getAllPesan();
            $dataProduk = data_produk::all();
            $dataCV = data_cv::all();
            return view('pimpinan.data-pesan')->with(['model' => $model]);
        } else {
            return view('errors.503');
        }
    }
    function dataPemesananCetak()
        {

            $role = Auth::user()->role;
            if ($role == 1) {
                $model = data_pesan::getAllPesan();
                $dataProduk = data_produk::all();
                $dataCV = data_cv::all();
                return view('pimpinan.data-pesan-cetak')->with(['model' => $model]);
            } else {
                return view('errors.503');
            }
        }

    function detailPemesanan()
    {
        $role = Auth::user()->role;
        if ($role == 1) {
            return view('admin.detail-pemesanan');

        } else {
            return view('errors.503');
        }
    }

    function dataPenjualan()
    {
        $role = Auth::user()->role;
        if ($role == 1) {
            $model = data_penjualan::getAllPenjualan();
            return view('pimpinan.data-penjualan')->with(['model' => $model]);

        } else {
            return view('errors.503');
        }
    }
    function dataPenjualanCetak()
        {
            $role = Auth::user()->role;
            if ($role == 1) {
                $model = data_penjualan::getAllPenjualan();
                return view('pimpinan.data-penjualan-cetak')->with(['model' => $model]);
            } else {
                return view('errors.503');
            }
        }

    function dataUser(){
        $role = Auth::user()->role;
        if ($role == 1) {
            $model = User::all();
            return view('pimpinan.data-user')->with(['model' => $model]);
        } else {
            return view('errors.503');
        }
    }

    function detailPenjualan()
    {
        $role = Auth::user()->role;
        if ($role == 1) {
            return view('pimpinan.detail-penjualan');
        } else {
            return view('errors.503');

        }
    }
}
