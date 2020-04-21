@extends('layout/main')

@section('title', 'Daftar Mahasiswa Baru')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-10">Detail Mahasiswa Baru</h1>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first()}}
                </div>
            @endif
            <div class="card">
            <div class="card-body">
                <h5 class="card-title"> {{ $student->nama}} </h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $student->nim}}</h6>
                <p class="card-text">{{ $student->email}}</p>
                <p class="card-text">{{ $student->jurusan}}</p>
                <button type="submit" class="btn btn-primary">Edit</button>
                <form action="/students/{{$student->id}}" method="POST" class="d-inline">
                    @method('delete')
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="/students" class="card-link">Kembali</a>
            </div>
            </div>   


        </div>
    </div>
</div>
@endsection