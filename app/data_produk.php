<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class data_produk extends Model
{
    public static function getAllProduk (){
        $data = DB::select("SELECT a.id,a.nama,d.daerah,d.nama_cv,a.harga,(SUM(b.jumlah_pesan)) as jumlah_pesan,c.jumlah_pesanan AS pesanan FROM data_produks a LEFT JOIN data_pesans b ON a.id LIKE b.produk_id LEFT JOIN data_penjualans c ON a.id LIKE c.produk_id,data_cvs d WHERE a.data_cv_id LIKE d.id GROUP BY a.id");
        $result = array();
        foreach ($data as $d){
            $stock = $d->pesanan - $d->jumlah_pesan;
            $push_array = array("id"=>$d->id,"nama"=>$d->nama,"daerah"=>$d->daerah,"nama_cv"=>$d->nama_cv,"harga"=>$d->harga,"pesanan"=>$d->pesanan,"stock"=>$stock);
            array_push($result, $push_array);
        }
        return $result;
    }
}




