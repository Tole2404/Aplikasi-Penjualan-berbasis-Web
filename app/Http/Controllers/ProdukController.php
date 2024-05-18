<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    function index(){
        $data = Produk::all();
        return view('produk', compact('data'));
    }
    function input() {
        return view('produk-input');
    }
    function simpan(Request $request){
        //dd($request);
        $save = Produk::create([
            'id_produk'=>$request->id_produk,
            'nm_produk'=>$request->nm_produk,
            'satuan'=>$request->satuan,
            'harga'=>$request->harga,
            'stock'=>$request->stock
        ]);
        if ($save->exists) {
            return redirect('produk');
        }
    }
    function edit($id_produk){
        $edited = Produk::findOrFail($id_produk);
        return view('produk-edit', compact('edited'));
     }
     function simpanedit(Request $request, $id_produk){
        $edited = Produk::findOrFail($id_produk);
        $edited->update($request->all());
        return redirect('produk');
    }
     function hapus($id_produk){
        $data = Produk::findOrFail($id_produk);
        $data->delete();
      return redirect('produk');
     }
}
