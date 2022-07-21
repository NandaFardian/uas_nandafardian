@extends('layouts.master')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Alat Berat</h1>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                  <a href="/alatberat/form" class="float-start btn btn-success">Tambah Data</a>
                  <form action="/alatberat" method="GET" class="float-right">
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
                          <th>Jenis Alat Berat</th>
                          <th>Merk</th>
                          <th>Tahun</th>
                          <th>Action</th>
                        </tr>
                      <tbody>
                          @forelse ($alatberat as $item)
                              <tr>     
                                  <th scope="row">{{$nomor++}}</th>
                                  <td>{{ $item->nm_alat }}</td>
                                  <td>{{ $item->merks->merk }}</td>
                                  <td>{{ $item->tahun }}</td>
                                  <td>
                                      <button type="button" class="btn btn-success"   data-bs-toggle="modal" data-bs-target="#exampleModal1{{$item->id}}">
                                        Detail
                                      </button>
                                      <!-- Modal -->
                                      <div class="modal fade" id="exampleModal1{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                              <img src="berkas/{{$item->foto}}" height="350" alt="">
                            
                                            </div>
                                            <div class="modal-body text-center">
                                              <h5>Jenis Alat Berat : <b>{{$item->nm_alat}}</b></h5>
                                              <h5>Merk : <b>{{$item->merks->merk}}</b></h5>
                                              <h5>Tahun : <b>{{$item->tahun}}</b></h5>
                                              <h5>Jumlah : <b>{{$item->jumlah}}</b></h5>
                                              <h5>Harga : <b>{{$item->harga}}</b></h5>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <a href="/alatberat/edit/{{$item->id}}" class="btn btn-warning">Edit</a>
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
                                                Yakin <b>{{$item->nm_alat}}</b> ingin di hapus?
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                  <form method="post" action="/alatberat/{{$item->id}}">
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
                                  <td colspan="7">Tidak Ada Data</td>
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
