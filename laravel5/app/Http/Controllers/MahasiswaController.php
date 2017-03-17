<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class MahasiswaController extends Controller
{
    public function awal()
   {
   	return "Hello dari MahasiswaController";
   }
   public function tambah()
   {
   	return $this->simpan();
   }
   public function simpan()
   {
   	$mahasiswa = new Mahasiswa();
   	$mahasiswa->nama = 'Rizky Fadillah';
   	$mahasiswa->nip = '1515015096';
   	$mahasiswa->alamat = 'Jl. Perjuangan 9';
   	$mahasiswa->pengguna_id = '1';	
   	$mahasiswa->save();   
   	return "Data Mahasiswa dengan nama {$mahasiswa->nama} telah disimpan";
   }
}
