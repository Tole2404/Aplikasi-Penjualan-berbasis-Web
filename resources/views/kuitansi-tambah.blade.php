@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<article>
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-blue">Buat Kuitansi Baru</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('kuitansi.index') }}">kuitansi</a></li>
              <li class="breadcrumb-item active">Kuitansi Baru</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

             <!-- Main content -->
    
    

              <form method="POST" action="{{ route('kuitansi.store') }}" role="form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Id Kuitansi  <span>: {{ $lastId }}</span></label>
                  </div>
                  </div>
                    <div class="col-sm-8">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Id Faktur</label>
                        <select class="form-control" name="id_faktur" required>
                        <option value="">Pilih id faktur</option>
                            @foreach ($datafaktur as $item)
                                <option value="{{ $item->id_faktur }}">{{ $item->id_faktur }}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                  <div class="form-group">
                    <label>Tanggal kuitansi</label>
                    <input input type="date" name="tgl_kuitansi" id="tgl_kuitansi" class="form-control" value="{{ $dateNow }}" required>
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Simpan dan lihat kuitansi</button>
                </div>
              </form>
    <!-- /.content -->
</article>
    
@endsection
