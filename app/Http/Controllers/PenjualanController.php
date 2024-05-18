<?php

namespace App\Http\Controllers;

use App\Models\detilpesan;
use App\Models\produk;
use Illuminate\Http\Request;
use App\Models\pesan;
use App\Models\Pelanggan;

class PenjualanController extends Controller
{
    function entrypenjualan()
    {
        $itempesan = pesan::orderBy('id_pesan')->first();
        $lastId = 1;

        if ($itempesan != null) {
            $lastId = $itempesan['id_pesan'];
            $lastId = $lastId + 1;
        }

        $listPelanggan = Pelanggan::all();
        $dateNow = date("Y-m-d");

        return view('entri-penjualan', compact('lastId', 'listPelanggan', 'dateNow'));
    }
    public function simpanpesan(Request $request)
    {
        $data = $request->all();

        pesan::create($data);

        return redirect()->route('entry-detil-pesan', $data['id_pesan'])->with([
            'id_pesan' => $data['id_pesan']
        ]);
}
public function entrydetilpesan($id_pesan)
{
    $listpesanan = detilpesan::where('id_pesan', $id_pesan)->get();
    $produk = produk::all();

    return view('detil-penjualan', compact('id_pesan', 'produk', 'listpesanan'));
}
public function simpandetil(Request $request)
    {
        $produk = produk::all();
        $dataDetil = $request->all();
        $itemProduk = [];
        $itemProduk = produk::findOrFail($dataDetil['id_produk']);

        $totalHarga = $dataDetil['jumlah'] * $itemProduk['harga'];

        detilpesan::create([
            'id_pesan' => $dataDetil['id_pesan'],
            'id_produk' => $dataDetil['id_produk'],
            'jumlah' => $dataDetil['jumlah'],
            'harga' => $totalHarga
        ]);

        $stock = $itemProduk['stock'] - $dataDetil['jumlah'];

        $itemProduk->update(['stock' => $stock]);

        return redirect()->route('entry-detil-pesan', $dataDetil['id_pesan'])->with([
            'produk' => $produk,
        ]);
    }
    public function deleteDetilpesan($id)
    {
        $itemDetil = detilpesan::findOrFail($id);

        $itemProduk = produk::where('id_produk', $itemDetil['id_produk'])->first();

        $stock = $itemProduk['stock'] + $itemDetil['jumlah'];
        $itemProduk->update(['stock' => $stock]);

        $itemDetil->delete();

        return redirect()->route('entry-detil-pesan', $itemDetil['id_pesan']);
    } 
}
