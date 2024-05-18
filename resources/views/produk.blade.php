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
              <li class="breadcrumb-item active">Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

             <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Produk</h3>
              <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Tambah Produk Baru</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th style="width: 10px">ID</th>
                    <th>Nama Produk</th>
                    <th>Satuan</th>
                    <th>Harga</th>
                    <th>Stock</th>
                    <th style="width: 40px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id_produk }}</td>
                        <td>{{$item->nm_produk }}</td>
                        <td>{{$item->satuan}}</td>
                        <td>{{$item->harga}}</td>
                        <td>{{$item->stock}}</td>
                        <td>
                        <a href='{{ url("/produk-edit/".$item->id_produk) }}'>
                            <i class="fa fa-edit blue"></i>
                        </a>
                        /
                        <a href='{{ url("/produk-delete/".$item->id_produk) }}'>
                            <i class="fa fa-trash red"></i>
                        </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
            <!-- /.card-body -->
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <form method="POST" action="{{ route('produk-simpan')}}" role="form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                  <div class="form-group">
                    <label>Id Produk</label>
                    <input type="text" class="form-control" placeholder="Masukkan Id" name="id_produk">
                  </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" placeholder="Masukkan produk" name="nm_produk">
                      </div>
                    </div>

                  <div class="form-group">
                    <label>Satuan</label>
                    <input class="form-control" rows="3" placeholder="Satuan ..." name="satuan">
                  </div>
                  <div class="row">
                  <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Harga satuan</label>
                        <input type="text" class="form-control" placeholder="....." name="harga">
                      </div>
                    </div>
                    <div class="col-sm-8">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Stock</label>
                        <input type="text" class="form-control" placeholder="...." name="stock">
                      </div>
                    </div>
                </div>
                </div>
                <!-- /.card-body -->

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
              </form>
            </div>
          </div>
        </div>


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</article>
    
@endsection
