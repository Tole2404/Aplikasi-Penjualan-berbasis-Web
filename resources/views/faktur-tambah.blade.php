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
              <li class="breadcrumb-item"><a href="{{ route('faktur.index') }}">Faktur</a></li>
              <li class="breadcrumb-item active">Faktur Baru</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

             <!-- Main content -->
    
    

              <form method="POST" action="{{ route('faktur.store') }}" role="form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Id Faktur  <span>: {{ $lastId }}</span></label>
                  </div>
                  </div>
                    <div class="col-sm-8">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Id Pesan</label>
                        <select class="form-control" name="id_pesan" required>
                        <option value="">Pilih id pesan</option>
                            @foreach ($datapesan as $item)
                                <option value="{{ $item->id_pesan }}">{{ $item->id_pesan }}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                  <div class="form-group">
                    <label>Tanggal faktur</label>
                    <input input type="date" name="tgl_faktur" id="tgl_faktur" class="form-control" value="{{ $dateNow }}" required>
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Simpan dan lihat faktur</button>
                </div>
              </form>
    <!-- /.content -->
</article>
    
@endsection
