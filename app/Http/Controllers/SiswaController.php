<?php

namespace App\Http\Controllers;

use App\Siswa;

class SiswaController extends Controller
{
    public function tampil()
    {
        // menampilkan semua data dari model Siswa yang bersumber
        // dari tabel / migrations siswas
        // atau sama dengan query sql
        // select * from siswas
        $a = Siswa::all();
        return view('siswa.index', ['siswa' => $a]);
    }
}
