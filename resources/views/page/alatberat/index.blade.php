@extends('layouts.master')
{{-- @section('title','Data Alat Berat') --}}

@section('content')
<div class="card">
  <div class="card-header">
    <h4 class="float-start">Data Merk</h4>
    <a href="/merk/form" class="float-right btn btn-success">Tambah Data</a>
  </div>
  <div class="card-body">
      <table class="table">
          
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Merk</th>
              <th scope="col">Kap</th>
              <th scope="col">Action</th>
            </tr>
         
          <tbody>
              @forelse ($merk as $item)
                  <tr>     
                      <th scope="row">{{$nomor++}}</th>
                      <td>{{ $item->merk }}</td>
                      <td>{{ $item->kap }}</td>
                      <td>
                          <a href="/merk/edit/{{$item->id}}" class="btn btn-warning btn-sm fa fa-pencil"></a>
                          <button type="button" class="btn btn-primary btn-sm fa fa-trash" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">
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
                      <td colspan="4">Tidak Ada Data</td>
                  </tr>
              @endforelse
          </tbody>
      </table>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Responsive Hover Table</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>User</th>
              <th>Date</th>
              <th>Status</th>
              <th>Reason</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>183</td>
              <td>John Doe</td>
              <td>11-7-2014</td>
              <td><span class="tag tag-success">Approved</span></td>
              <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
            </tr>
            <tr>
              <td>219</td>
              <td>Alexander Pierce</td>
              <td>11-7-2014</td>
              <td><span class="tag tag-warning">Pending</span></td>
              <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
            </tr>
            <tr>
              <td>657</td>
              <td>Bob Doe</td>
              <td>11-7-2014</td>
              <td><span class="tag tag-primary">Approved</span></td>
              <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
            </tr>
            <tr>
              <td>175</td>
              <td>Mike Doe</td>
              <td>11-7-2014</td>
              <td><span class="tag tag-danger">Denied</span></td>
              <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection