<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesan;

class LaporanController extends Controller
{
    public function tanggal(Request $request)
    {   
        $data = pesan::join('pelanggan','pesan.id_pelanggan','=','pelanggan.id_pelanggan')
        ->join('detilpesan','pesan.id_pesan','=','detilpesan.id_pesan')->get();
        
        return view('pertanggal', compact('data'));
    }
}
