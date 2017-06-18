<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class data_anggota extends Model
{
   public static function getAllPegawai (){
        $data = DB::select("SELECT a.id,a.nama,a.tanggal_lahir,a.kelamin,a.no_hp,a.alamat,b.daerah,b.nama_cv FROM `data_anggotas` a,`data_cvs` b WHERE a.data_cv_id LIKE b.id");
       return $data;
    }

    public static function insertData($input){
        if(!DB::table('data_anggotas')->insert($input)){
            return 0;
        }else{
            return 1;
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public static function getDetailPegawai($id)
    {
        $data = DB::select("SELECT data_anggotas.id,data_anggotas.nama,data_anggotas.tanggal_lahir,data_anggotas.kelamin,data_anggotas.no_hp,data_anggotas.alamat,data_cvs.id AS data_cv_id,data_cvs.daerah,data_cvs.nama_cv,data_anggotas.no_rekening FROM `data_anggotas`,`data_cvs` WHERE data_anggotas.data_cv_id LIKE data_cvs.id AND data_anggotas.id = '$id'");
        $data = json_encode($data[0]);
        return $data;
    }
}