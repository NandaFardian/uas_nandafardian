@extends('layouts.master')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Data Alat Berat</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Data Master</a></li>
            <li class="breadcrumb-item active">Data Alat Berat</li>
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
            <form id="quickForm" method="post" action="/alatberat/{{$alatberat->id}}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Jenis Alat Berat</label>
                  <input type="text" value="{{$alatberat->nm_alat}}" name="nama" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Merk</label>
                  <select name="merk" id="" class="form-control">
                    <option value="">-Pilih Merk-</option>
                    @foreach ($merk as $item)
                        <option value="{{$item->id}}" {{$alatberat->merks_id == $item->id ? 'selected' : ''}}>{{$item->merk}}</option>
                    @endforeach
                  </select> 
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Tahun</label>
                  <input type="text" value="{{$alatberat->tahun}}" name="tahun" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                  <input type="text" value="{{$alatberat->jumlah}}" name="jumlah" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Harga</label>
                  <input type="text" value="{{$alatberat->harga}}" name="harga" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <input type="file" name="foto" class="form-control" id="exampleInputPassword1">
                  <img src="{{asset('berkas/'.$alatberat->foto)}}" height="350" alt="">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="/alatberat" class="btn btn-warning text-white">Batal</a>
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
