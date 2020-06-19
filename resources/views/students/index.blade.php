@extends('layout/main')

@section('title', 'Daftar Mahasiswa Baru')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            
            <h1 class="mt-10">Daftar Mahasiswa Baru</h1>
            <div class="mt-4">
                <a href="{{ url('/print_all') }}" class="btn btn-primary" target="_blank">
                    Export all to PDF
                </a>
                <a href="/students/create" class="btn btn-primary">Tambah Data</a>
            </div>

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
        <div class="col-md-4">
            <form action="/search" method="get">
                <div class="input-group mt-4">
                    <input type="search" name="search" class="form-control">
                    <span class="input-group-prepend">
                        <button type="submit" class="btn btn-success">Search</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection