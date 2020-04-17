@extends('layout/main')

@section('title', 'Daftar Mahasiswa Baru')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-10">Daftar Mahasiswa Baru</h1>
                <a href="/students/create" class="btn btn-primary">Tambah Data</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                    </div>
                @endif

                <ul class="list-group">
                    @php
                        $no = 0;
                    @endphp
                @foreach ($students as $student)
                    @php
                        $no++;
                    @endphp
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $no.". ".$student -> nama }}
                        <a href="/students/{{$student -> id}}" class="badge badge-info">details</a>
                    </li>
                @endforeach
                </ul>

            </div>
        </div>
    </div>
@endsection