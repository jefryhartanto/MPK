<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class data_pesan extends Model
{
    public static function getAllPesan(){
        $data = DB::select("SELECT c.id,a.nama,b.daerah,b.nama_cv,c.jumlah_pesan FROM data_produks a,data_cvs b,data_pesans c WHERE a.data_cv_id LIKE b.id AND c.produk_id LIKE a.id");
        return $data;

    }
}
