@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<article>
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-blue">Master Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('produk') }}">produk</a></li>
              <li class="breadcrumb-item active">Edit Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

             <!-- Main content -->
    
    

              <form method="POST" action="{{url('/produk-simpanedit/'.$edited->id_produk)}}" role="form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Id produk</label>
                    <input type="text" class="form-control" name="id_produk" value='{{$edited->id_produk}}'>
                  </div>
                  </div>
                    <div class="col-sm-8">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama produk</label>
                        <input type="text" class="form-control" name="nm_produk" value='{{$edited->nm_produk}}'>
                      </div>
                    </div>
                    <div class="col-sm-6">
                  <div class="form-group">
                    <label>Satuan</label>
                    <textarea class="form-control" rows="4" name="satuan">{{$edited->satuan}}</textarea>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Harga Satuan</label>
                        <input type="text" class="form-control" name="harga" value='{{$edited->harga}}'>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Stock</label>
                        <input type="text" class="form-control" name="email" value='{{$edited->stock}}'>
                      </div>
                    </div>
                </div>
                </div>
                <!-- /.card-body -->

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
    <!-- /.content -->
</article>
    
@endsection
