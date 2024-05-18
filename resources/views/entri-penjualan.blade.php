@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<article>
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-blue">Entri Penjualan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Entri penjualan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

             <!-- Main content -->
    
    

              <form method="POST" action="{{ route('simpan-pesan') }}" role="form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Id Pesan </label>
                    <input type="text" class="form-control" name="id_pesan" >
                  </div>
                  </div>
                    <div class="col-sm-8">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Id_pelanggan</label>
                        <select class="form-control" name="id_pelanggan" >
                          <option value="">Pilih pelanggan</option>
                          @foreach ($listPelanggan as $item)
                    <option value="{{ $item->id_pelanggan }}">{{ $item->nm_pelanggan }}</option>
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
                        <label>Tgl_pesan</label>
                        <input type="date" class="form-control" name="tglpesan" value="{{ $dateNow }}" required>
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
    <!-- /.content -->
</article>
    
@endsection
