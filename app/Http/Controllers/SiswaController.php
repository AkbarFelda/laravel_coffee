<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class SiswaController extends Controller
{
    public function index()
        {
            return view ('siswa.all', [
                "title" => "siswa",
                "siswa" => siswa::all()
                ]
            ); 
        }

        public function show($siswa)
        {
            return view('siswa.detail', [
                "title" => "detail-siswa",
                "siswa" => siswa::find($siswa)
            ]);
        }
}
