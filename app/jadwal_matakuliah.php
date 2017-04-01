<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
    protected $table = 'Jadwal_matakuliah';
    public function Mahasiswa()//membuat function Mahasiswa
    {
		return $this->belongsTo(Mahasiswa::class); //kebalikan dari hasmany pada table mahasiswa yaitu relasi one to many
	}
	public function Ruanagn()//membuat function Ruangan
	{
		return $this->belongsTo(Ruangan::class);//kebalikan dari hasmany pada table ruangan yaitu relasi one to many
	}	
	public function dosen_matakuliah()//membuat function dosen_matakuliah
	{
		return $this->belongsTo(Dosen_matakuliah::class);//kebalikan dari hasmany pada table dosen_matakuliah yaitu relasi one to many
	}
    //protected $fillable = ['matakuliah_id','ruangan_id','dosen_matakuliah_id'];
}
