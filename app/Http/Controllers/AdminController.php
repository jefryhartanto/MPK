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

class AdminController extends Controller
{
    function index()
    {
        $role = Auth::user()->role;
        if ($role == 0) {
            return view('admin.index');
        } else {
            return view('errors.503');
        }
    }

    function dataPegawai()
    {
        $role = Auth::user()->role;
        if ($role == 0) {
            $model = data_anggota::getAllPegawai();
            $dataCV = data_cv::all();
            return view('admin.data-pegawai')->with(['model' => $model, 'dataCV' => $dataCV]);
        } else {
            return view('errors.503');
        }
    }

    function detailPegawai()
    {
        $role = Auth::user()->role;
        if ($role == 0) {
            return view('admin.detail-pegawai');
        } else {
            return view('errors.503');
        }
    }

    function dataProduk()
    {
        $role = Auth::user()->role;
        if ($role == 0) {
            $model = data_produk::getAllProduk();
            $dataCV = data_cv::all();
            return view('admin.data-produk')->with(['model' => $model, 'dataCV' => $dataCV]);
        } else {
            return view('errors.503');
        }

    }

    function detailProduk()
    {
        $role = Auth::user()->role;
        if ($role == 0) {
            return view('admin.detail-produk');
        } else {
            return view('errors.503');
        }

    }

    function dataPemesanan()
    {

        $role = Auth::user()->role;
        if ($role == 0) {
            $model = data_pesan::getAllPesan();
            $dataProduk = data_produk::all();
            $dataCV = data_cv::all();
            return view('admin.data-pesan')->with(['model' => $model, 'dataProduk' => $dataProduk, 'dataCV' => $dataCV]);
        } else {
            return view('errors.503');
        }
    }

    function detailPemesanan()
    {
        $role = Auth::user()->role;
        if ($role == 0) {
            return view('admin.detail-pemesanan');

        } else {
            return view('errors.503');
        }
    }

    function dataPenjualan()
    {
        $role = Auth::user()->role;
        if ($role == 0) {
            $model = data_penjualan::getAllPenjualan();
            $dataProduk = data_produk::All();
            $dataPemesanan = data_pesan::All();
            return view('admin.data-penjualan')->with(['model' => $model, 'dataProduk' => $dataProduk, 'dataPemesanan' => $dataPemesanan]);

        } else {
            return view('errors.503');
        }
    }

    function dataUser(){
        $role = Auth::user()->role;
        if ($role == 0) {
            $model = User::all();
            return view('admin.data-user')->with(['model' => $model]);
        } else {
            return view('errors.503');
        }
    }

    function detailPenjualan()
    {
        $role = Auth::user()->role;
        if ($role == 0) {
            return view('admin.detail-penjualan');
        } else {
            return view('errors.503');

        }
    }
}
