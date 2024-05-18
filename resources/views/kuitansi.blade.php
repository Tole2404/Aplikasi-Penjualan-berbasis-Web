@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<article>
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-blue">Kuitansi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">kuitansi</li>
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
              <a href="{{ route('kuitansi.create') }}" class="ms-auto">
              <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Buat Kuitansi Baru</button></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th style="width: 10px">ID Kuitansi</th>
                    <th>Id Faktur</th>
                    <th>Tanggal kuitansi</th>
                    <th style="width: 40px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item->id_kuitansi }}</td>
                        <td>{{ $item->id_faktur }}</td>
                        <td>{{ $item->tgl_kuitansi }}</td>
                        <td>
                            <a href="#"><button class="btn btn-info">Lihat kuitansi</button></a>
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
