@extends('layouts.master')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Data Merk</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Data Master</a></li>
            <li class="breadcrumb-item active">Data Merk</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" method="post" action="/merk/{{$merk->id}}">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Kode</label>
                  <input type="text" value="{{$merk->kode}}" name="kode" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nama Merk</label>
                  <input type="text" value="{{$merk->merk}}" name="nama" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Kapasitas</label>
                  <input type="text" value="{{$merk->kapasitas}}" name="kap" class="form-control" id="exampleInputPassword1">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="/merk" class="btn btn-warning text-white">Batal</a>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

    <!-- Main content -->
    
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
