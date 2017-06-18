<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class data_penjualan extends Model
{
    public static function getAllPenjualan(){
        $data = DB::select("SELECT a.id,a.jumlah_pesanan,b.nama,a.customer,b.harga,(a.jumlah_pesanan*b.harga) AS total FROM data_penjualans a LEFT JOIN data_produks b ON a.produk_id LIKE b.id");
        return $data;
        
    }
}
