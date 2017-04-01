<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';
    
    public function dosen()//membuat function dosen
	{
		return $this->hasOne(Dosen::class);//membuat relasi one to one ke dosen dari table pengguna
	}
	public function mahasiswa()//membuat function mahasiswa
	{
		return $this->hasOne(Mahasiswa::class);//membuat relasi one to one ke table dosen dari table pengguna
	}
	//public function peran();
	//{
	//	return this->belongsToMany(peran::class);
	//}
    //protected $fillable = ['username','password'];
}
