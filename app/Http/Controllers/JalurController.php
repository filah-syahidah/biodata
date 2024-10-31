<?php

namespace App\Http\Controllers;

use App\Models\Jalur;
use Illuminate\Http\Request;

class JalurController extends Controller
{
    public function index()
    {
        return view('controllerjalur');
    }
    public function menampilkanDataModel()
    {
        $dataSekolah = Jalur::$sekolah;
        $dataKelas = Jalur::$kelas;
        return view('modeljalur', compact('dataSekolah','dataKelas'));
    }
    public function menampilkanBiodata()
    {
        $dataNama = Jalur::$nama;
        $dataKelas = Jalur::$kelas;
        $dataSekolah = Jalur::$sekolah;
        $dataAlamat = Jalur::$alamat;
        $dataHobi = Jalur::$hobi;
        $dataEmail = Jalur::$email;
        $dataCs = Jalur::$cs;
    }
}
