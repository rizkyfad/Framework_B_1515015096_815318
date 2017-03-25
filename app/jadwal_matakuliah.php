<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
    protected $table = 'Jadwal_matakuliah';
    protected $fillable = ['matakuliah_id','ruangan_id','dosen_matakuliah_id'];
}
