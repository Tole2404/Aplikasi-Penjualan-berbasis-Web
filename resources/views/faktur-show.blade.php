@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<article>
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-blue">Buat Faktur Baru</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('pelanggan') }}">pelanggan</a></li>
              <li class="breadcrumb-item active">Faktur Baru</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

             <!-- Main content -->
    
    

             <div class="my-4">
            <table style="width: 100%">
                <tbody>
                    <tr>
                        <td>Id pesan</td>
                        <td>: {{ $dataPelanggan->id_pesan }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal pesan</td>
                        <td>: {{ $dataPelanggan->tgl_pesan }}</td>
                    </tr>
                    <tr>
                        <td>Id pelanggan</td>
                        <td>: P{{ str_pad($dataPelanggan->id_pelanggan, 4, '0', STR_PAD_LEFT) }}</td>
                    </tr>
                    <tr>
                        <td>Nama pelanggan</td>
                        <td>: {{ $dataPelanggan->nm_pelanggan }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Id produk</th>
                    <th>Nama produk</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ str_pad($item->id_produk, 4, '0', STR_PAD_LEFT) }}</td>
                        <td>{{ $item->nm_produk }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->harga }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    <!-- /.content -->
</article>
    
@endsection
