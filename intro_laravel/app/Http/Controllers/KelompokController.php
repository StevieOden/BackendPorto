<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelompok;

class KelompokController extends Controller
{

        public function index()
        {
            return view('kelompok', [
                "title" => "Kelompok",
                "kelompok" => Kelompok::all()
            ]);
        }
    
        public function show($link)
        {
            return view('kelompokdetail', [
                "title" => "Anggota",
                "kelompokdetail" => Kelompok::find($link)
            ]);
        }
}

