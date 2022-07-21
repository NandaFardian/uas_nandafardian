@extends('layouts.master')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Merk</h1>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                  <a href="/merk/form" class="float-start btn btn-success">Tambah Data</a>
                  <form action="/merk" method="GET" class="float-right">
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="search" class="form-control float-right" placeholder="Search" value="{{$request->search}}">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>    
              <div class="card-body table-responsive">
                  <table class="table table-hover text-nowrap">
                      <tr>
                          <th>No</th>
                          <th>Kode</th>
                          <th>Nama Merk</th>
                          <th>Kapasitas</th>
                          <th>Action</th>
                        </tr>
                      <tbody>
                          @forelse ($merk as $item)
                              <tr>     
                                  <th scope="row">{{$nomor++}}</th>
                                  <td>{{ $item->kode }}</td>
                                  <td>{{ $item->merk }}</td>
                                  <td>{{ $item->kapasitas }}</td>
                                  <td>
                                      <a href="/merk/edit/{{$item->id}}" class="btn btn-warning">Edit</a>
                                      <button type="button" data-bs-toggle="modal" class="btn btn-danger" data-bs-target="#exampleModal{{$item->id}}">Hapus
                                      </button>
                                      <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body">
                                                Yakin <b>{{$item->merk}}</b> ingin di hapus?
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                  <form method="post" action="/merk/{{$item->id}}">
                                                      @csrf
                                                      @method('DELETE')
                                                      <button type="submit" class="btn btn-primary">Hapus</button>
                                                  </form>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                  </td>
                              </tr>
                          @empty
                              <tr class="table-primary">
                                  <td colspan="5">Tidak Ada Data</td>
                              </tr>
                          @endforelse
                      </tbody>
                  </table>
              </div>
            </div>
          </div>
      </div>
    </div>
    </section>    
</div>
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
