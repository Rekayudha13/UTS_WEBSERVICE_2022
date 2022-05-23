@extends('layouts.app')
@section('content')
<div class="container">

    <div class="card">
        <div class="card-header">
            Isi Biodata
        </div>
        <div class="card-body">
            <form action="{{ url('/biodata/store') }}" method="post">
                @csrf
            <div class="mb-3">
              <label for="nim" class="form-label">Nim</label>
              <input value="{{ old('nim') }}" name="nim" type="number" class="form-control" id="nim">
            </div>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input value="{{ old('nama') }}" name="nama" type="text" class="form-control" id="nama">
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
              <input value="{{ old('tanggal_lahir') }}" name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir">
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1" value="L">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Laki-laki
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault2" value="P">
                    <label class="form-check-label" for="flexRadioDefault2">
                      Perempuan
                    </label>
                  </div>
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea name="alamat" id="alamat" class="form-control">{{ old('alamat') }}</textarea>
            </div>
            <div class="mb-3">
              <label for="no_hp" class="form-label">No Hp</label>
              <input value="{{ old('no_hp') }}" name="no_hp" type="text" class="form-control" id="no_hp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input value="{{ old('email') }}" name="email" type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input value="{{ old('jurusan') }}" name="jurusan" type="text" class="form-control" id="jurusan">
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
    </div>
</div>
</div>
@endsection