<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
	protected $table = 'Dosen';
	
	public function pengguna()//membuat function pengguna
	{
		return $this->belongsTo(pengguna::class);//kebalikan dari hasone pada table pengguna yaitu relasi one to one
	}
	public function dosen_matakuliah()//membuat function dosen_matakuliah
	{
		return $this->hasMany(Dosen_matakuliah::class);//membuat relasi one to many ke table dosen_matakuliah dari table dosen
	}
    //protected $table = 'Dosen';
    //protected $fillable = ['nama','nip','alamat','pengguna_id'];
}
