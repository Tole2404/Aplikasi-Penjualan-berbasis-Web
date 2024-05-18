<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        $data = Pelanggan::all();
        return view ('pelanggan', compact('data'));
    }

    function simpan(Request $request){
        $save = Pelanggan::create([
            'id_pelanggan'=>$request->id_pelanggan,
            'nm_pelanggan'=>$request->nm_pelanggan,
            'alamat'=>$request->alamat,
            'email'=>$request->email,
            'telepon'=>$request->telepon
        ]);
        if ($save->exists) {
            return redirect('pelanggan');
        }
    }
        function edit($id_pelanggan){
            $edited = Pelanggan::findOrFail($id_pelanggan);
            return view('pelanggan-edit', compact('edited'));
         }
         function simpanedit(Request $request, $id_pelanggan){
            $edited = Pelanggan::findOrFail($id_pelanggan);
            $edited->update($request->all());
            return redirect('pelanggan');
         }
         function hapus($id_pelanggan){
            $data = Pelanggan::findOrFail($id_pelanggan);
            $data->delete();
          return redirect('pelanggan');
         }
    }
    
