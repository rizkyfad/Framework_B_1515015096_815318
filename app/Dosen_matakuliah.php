<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_matakuliah extends Model
{
    protected $table = 'Dosen_matakuliah';
    public function Dosen()//membuat function dosen
    {
		return $this->belongsTo(Dosen::class);//kebalikan dari hasmany pada table dosen yaitu relasi one to many
	}	
	public function Matakuiah(){//membuat function matakuliah
	return $this->belongsTo(Matakuliah::class);//kebalikan dari hasmany pada table matakuliah yaitu relasi one to many
	}	
	public function jadwal_matakuliah(){//membuat fuction jadwal_matakuliah
	return $this->hasMany(Jadwal_matakuliah::class);//membuat relasi one to many ke table jdawal_matakuliah dari table dosen_matakuliah
	}
    //protected $fillable = ['dosen_id','matakuliah_id'];
}
