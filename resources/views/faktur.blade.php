@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<article>
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-blue">Faktur</h1>
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
      <div class="container-fluid">

        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Faktur</h3>
              <a href="{{ route('faktur.create') }}" class="ms-auto">
              <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Buat Faktur Baru</button></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th style="width: 10px">ID</th>
                    <th>Id Faktur</th>
                    <th>Id Pesan</th>
                    <th style="width: 40px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item->id_faktur }}</td>
                        <td>{{ $item->id_pesan }}</td>
                        <td>{{ $item->tgl_faktur }}</td>
                        <td>
                            <a href="{{ route('faktur.show', $item->id_pesan) }}"><button class="btn btn-info">Lihat faktur</button></a>
                        </td>
                        
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
            
            <!-- /.card-body -->
        </div>
    

          
    <!-- /.content -->
</article>
    
@endsection
