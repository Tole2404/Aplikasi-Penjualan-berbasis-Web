@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<article>
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-blue">Master Pelanggan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('pelanggan') }}">pelanggan</a></li>
              <li class="breadcrumb-item active">Edit Pelanggan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

             <!-- Main content -->
    
             <section class="content">
      <div class="container-fluid">

              <form method="POST" action="{{url('/pelanggan-simpanedit/'.$edited->id_pelanggan)}}" role="form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Id Pelanggan</label>
                    <input type="text" class="form-control" name="id_pelanggan" value='{{$edited->id_pelanggan}}'>
                  </div>
                  </div>
                    <div class="col-sm-8">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Pelanggan</label>
                        <input type="text" class="form-control" name="nm_pelanggan" value='{{$edited->nm_pelanggan}}'>
                      </div>
                    </div>
                    <div class="col-sm-6">
                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" rows="4" name="alamat">{{$edited->alamat}}</textarea>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" class="form-control" name="telepon" value='{{$edited->telepon}}'>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value='{{$edited->email}}'>
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
    </div><!-- /.container-fluid -->
    </section>

</article>
    
@endsection
