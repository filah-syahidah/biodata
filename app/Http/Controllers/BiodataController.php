<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    
    
    public function menampilkanBiodata()
    {
        $dataNama = Biodata::$nama;
        $dataKelas = Biodata::$kelas;
        $dataSekolah = Biodata::$sekolah;
        $dataAlamat = Biodata::$alamat;
        $dataHobi = Biodata::$hobi;
        $dataEmail = Biodata::$email;
        $dataCs = Biodata::$cs;

        return view('biodata', compact('dataNama','dataSekolah','dataKelas','dataSekolah','dataAlamat','dataHobi','dataEmail','dataCs'));

    }
}
