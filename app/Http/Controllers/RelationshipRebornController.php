<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\matakuliah;
class RelationshipRebornController extends Controller
{
    public function ujihas()
    {
    	$data = dosen::has('dosen_matakuliah')->get();
    	dd($data);
    }

    public function ujidoesnthave()
    {
    	$data = matakuliah::doesnthave('dosen_matakuliah')->get();
    	dd($data);
    }
}
