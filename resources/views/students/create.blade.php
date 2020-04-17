@extends('layout/main')

@section('title', 'Daftar Mahasiswa Baru')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="ml-10">Tambah Data Mahasiswa</h1>
            <form method="POST" action="/students">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                  </div>

                  <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM">
                  </div>
                  
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                  </div>
                  
                  <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan">
                  </div>

                  <div class="form-group">
                      <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
            </form>
        </div>
    </div>
</div>
@endsection