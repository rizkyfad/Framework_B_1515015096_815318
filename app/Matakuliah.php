<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'Matakuliah';
    public function dosen_matakuliah()//membuat function dosen_matakuliah
    {
		return $this->hasMany(Dosen_Matakuliah::class);//membuat relasi one to many ke table dosen_matakuliah dari matakuliah
	}	
    //protected $fillable = ['title','keterangan'];
}
