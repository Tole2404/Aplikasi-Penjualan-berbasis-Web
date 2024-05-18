@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<article>
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-blue">Laporan pertanggal</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Faktur penjualan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

             <!-- Main content -->
             <section class="content">
             <div class="my-3 d-flex justify-content-between">
            <form action="{{ route('laporan-tanggal') }}" method="GET">
                @csrf
                <div class="row mb-2">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="tanggalAwal">Tanggal awal</label>
                            <input type="date" name="tanggalAwal" id="tanggalAwal" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="tanggalAkhir">Tanggal akhir</label>
                            <input type="date" name="tanggalAkhir" id="tanggalAkhir" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-5">
                      <button class="btn btn-primary" type="submit">Cari</button>
                      </div>
                </div>
                
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID pesan</th>
                    <th>Tanggal pesan</th>
                    <th>Pelanggan</th>
                    <th>Jumlah produk</th>
                    <th>Total harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>P{{ str_pad($item->id_pesan, 4, '0', STR_PAD_LEFT) }}</td>
                        <td>{{ $item->tglpesan }}</td>
                        <td>{{ $item->nm_pelanggan }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->harga }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</section>
          
    <!-- /.content -->
</article>
    
@endsection
