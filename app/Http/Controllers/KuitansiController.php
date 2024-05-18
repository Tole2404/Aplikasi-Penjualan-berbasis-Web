<?php

namespace App\Http\Controllers;

use App\Models\faktur;
use App\Models\kuitansi;
use Illuminate\Http\Request;

class KuitansiController extends Controller
{
    public function index()
    {
        $data = kuitansi::all();

        return view('kuitansi', compact('data'));
    }
    public function create()
    {
        $itempesan = kuitansi::orderBy('id_kuitansi', 'desc')->first();
        $lastId = 1;

        if ($itempesan != null) {
            $lastId = $itempesan['id'];
            $lastId = $lastId + 1;
        }

        $datafaktur = faktur::all();
        $dateNow = date("Y-m-d");

        return view('kuitansi-tambah', compact('datafaktur', 'lastId', 'dateNow'));
    }
    public function store(Request $request)
    {
        $data = $request->all();

        kuitansi::create($data);

        return redirect()->route('kuitansi.index');
    }
}
