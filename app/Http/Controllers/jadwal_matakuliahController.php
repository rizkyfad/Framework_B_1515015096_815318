<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;

class jadwal_matakuliahController extends Controller
{
    public function awal()
   {
   	return "Hello dari Jadwal_matakuliahController";
   }
   public function tambah()
   {
   	return $this->simpan();
   }
   public function simpan()
   {
   	$jadwal_matakuliah = new jadwal_matakuliah();
   	$jadwal_matakuliah->matakuliah_id = '1';
   	$jadwal_matakuliah->ruangan_id = '1';
   	$jadwal_matakuliah->dosen_matakuliah_id = '1';
   	$jadwal_matakuliah->save();   
   	return "Data jadwal_matakuliah {$jadwal_matakuliah->matakuliah_id} telah disimpan";
}
   public function jadwal_kulmhs() {
   $jadwal = jadwal_matakuliah::all();  //untuk menampilkan semua data 
   foreach ($jadwal as $dos) {  //panggilnya pakai foreach
   echo "nama Mahasiswa :" .$dos->mahasiwa->nama;
   echo "<br>";
   echo " Berada Di Kelas :" .$dos->ruangan->id;
}
}
}
