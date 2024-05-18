@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<article>
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-blue">Detail Penjualan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Detil Penjualan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

             <!-- Main content -->
    
    

              <form method="POST" action="{{ route('simpan-detil') }}" role="form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Id Pesan <span class="ps-5">: {{ $id_pesan }}</span></label>
                    <input type="number" class="form-control" name="id_pesan" value="{{ $id_pesan }}" hidden>
                  </div>
                  </div>
                    <div class="col-sm-8">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama produk</label>
                        <select class="form-control" name="id_produk" >
                          <option value="">Pilih produk</option>
                          @foreach ($produk as $item)
                    <option value="{{ $item->id_produk }}">{{ $item->nm_produk }}</option>
                @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                  </div>
                  <div class="row">
                  <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Jumlah barang</label>
                        <input type="text" class="form-control" name="jumlah" placeholder="Masukkan jumlah narang yang dibeli" required>
                      </div>
                    </div>
                </div>
                </div>
                <!-- /.card-body -->

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Entri</button>
                </div>
              </form>
              <div class="card p-3 mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th>Id produk</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listpesanan as $item)
                    <tr>
                        <td>{{ $item->id_produk }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>
                            <form action="{{ route('delete-detil', $item->id_pesan) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.content -->
</article>
    
@endsection
