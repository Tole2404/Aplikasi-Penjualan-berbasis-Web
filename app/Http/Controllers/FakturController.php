<?php

namespace App\Http\Controllers;

use App\Models\faktur;
use App\Models\pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FakturController extends Controller
{
    public function index()
    {
        $data = faktur::all();

        return view('faktur', compact('data'));
    }

    public function create()
    {
        $itempesan = faktur::orderBy('id_faktur', 'desc')->first();
        $lastId = 1;

        if ($itempesan != null) {
            $lastId = $itempesan['id'];
            $lastId = $lastId + 1;
        }

        $datapesan = pesan::all();
        $dateNow = date("Y-m-d");

        return view('faktur-tambah', compact('datapesan', 'lastId', 'dateNow'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        faktur::create($data);

        return redirect()->route('faktur.index');
    }

    public function show($id)
    {
        $dataPelanggan = DB::table('faktur')
            ->join('pesan', 'faktur.id_pesan', '=', 'pesan.id')
            ->join('detil_pesan', 'pesan.id', '=', 'detil_pesan.id_pesan')
            ->join('pelanggan', 'pesan.id_pelanggan', '=', 'pelanggan.id')
            ->select(DB::raw('pesan.id as id_pesan'), 'pesan.tgl_pesan', DB::raw('pelanggan.id AS id_pelanggan'), 'pelanggan.nm_pelanggan')
            ->where('faktur.id_pesan', $id)
            ->groupBy('pesan.id', 'pesan.tgl_pesan', 'pelanggan.id', 'pelanggan.nm_pelanggan')
            ->first();

        $data = DB::table('faktur')
            ->join('pesan', 'faktur.id_pesan', '=', 'pesan.id')
            ->join('detil_pesan', 'pesan.id', '=', 'detil_pesan.id_pesan')
            ->join('pelanggan', 'pesan.id_pelanggan', '=', 'pelanggan.id')
            ->join('produk', 'detil_pesan.id_produk', '=', 'produk.id')
            ->select('produk.id', 'produk.nm_produk', DB::raw('sum(detil_pesan.jumlah) as jumlah'), DB::raw('sum(detil_pesan.harga) as harga'))
            ->where('faktur.id_pesan', $id)
            ->groupBy('produk.id', 'produk.nm_produk')
            ->get()
            ->toArray();

        // dd($dataPelanggan, $data);

        return view('faktur-show', compact('data', 'dataPelanggan'));
    }
    public function destroy($id)
    {
        $item = faktur::findOrFail($id);

        $item->delete();

        return redirect()->route('faktur.index');
    }
}

