<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    public function query1(){
        $pegawai = DB::select('SELECT * FROM pegawai');
        return view('query/query1', ['pegawai' => $pegawai]);
    }

    public function query2(){
        $pegawai = DB::select('SELECT nip, nama FROM pegawai');
        return view('query/query2', ['pegawai' => $pegawai]);
    }

    public function query3(){
        $pegawai = DB::select('SELECT nama FROM pegawai WHERE YEAR(tgl_lahir)=1996');
        return view('query/query3', ['pegawai' => $pegawai]);
    }

    public function query4(){
        $pegawai = DB::select('SELECT nama FROM pegawai WHERE anak > 1');
        return view('query/query4', ['pegawai' => $pegawai]);
    }

    public function query5(){
        $pegawai = DB::select('SELECT nama FROM pegawai WHERE golongan LIKE "IV A"');
        return view('query/query5', ['pegawai' => $pegawai]);
    }

    public function query6(){
        $pegawai = DB::select('SELECT nama FROM pegawai WHERE masuk_kerja BETWEEN "2014/01/01" AND "2018/01/01"');
        return view('query/query6', ['pegawai' => $pegawai]);
    }

    public function query7(){
        $pegawai = DB::select('SELECT * FROM pegawai WHERE YEAR(tgl_lahir)<=1992 AND STATUS LIKE "nikah" AND anak >= 2');
        return view('query/query7', ['pegawai' => $pegawai]);
    }

    public function query8(){
        $pegawai = DB::select('SELECT nama FROM pegawai WHERE YEAR(NOW())-YEAR(masuk_kerja)>=15 AND (golongan LIKE "III A" OR golongan LIKE "III B")');
        return view('query/query8', ['pegawai' => $pegawai]);
    }

    public function query9(){
        $pegawai = DB::select('SELECT nama FROM pegawai WHERE YEAR(NOW())-YEAR(tgl_lahir)<=26 AND (STATUS LIKE "belum menikah" OR golongan LIKE "III C")');
        return view('query/query9', ['pegawai' => $pegawai]);
    }
}
