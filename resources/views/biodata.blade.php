@extends('layouts.app')
@section('content')
   <div class="container">
    <div class="card">
        <div class="card-header">
          Biodata
          <a href="/biodata/create" class="btn btn-primary btn-sm float-end">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->tanggal_lahir }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->jenis_kelamin }}</td>
                        <td>{{ $item->no_hp }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->jurusan }}</td>
                    <td>
                        <a href="{{ url('/biodata/edit/'. $item->id) }}" class="btn btn-warning btn-sm" type="button">Ubah</a>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">Hapus</button>
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
        </div>
      </div>
   </div>

   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Anda yakin ingin menghapus?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a href="{{ url('biodata/delete/'.$item->id) }}" type="button" class="btn btn-danger">Save changes</a>
        </div>
      </div>
    </div>
  </div>
@endsection