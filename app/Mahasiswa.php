<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
	protected $table = 'Mahasiswa';
	
	public function Pengguna()//membuat function pengguna
	{
		return $this->belongsTo(pengguna::class);//kebalikan dari hasone pada table pengguna yaitu relasi one to one
	}
	public function jadwal_matakuliah()//membuat function jadwal_matakuliah
	{
		return $this->hasMany(jadwal_matakuliah::class);//membuat relasi one to many ke table jdawal_matakuliah dari table mahasiswa
	}
     //protected $table = 'Mahasiswa';
    //protected $fillable = ['nama','nip','alamat','pengguna_id'];
}
