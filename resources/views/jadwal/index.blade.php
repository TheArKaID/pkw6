@extends('layout.main')

@section('title', 'Index')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1>
                    Laravel Index Page
                </h1>
            </div>
        </div>
        <a href="/jadwal/tambah">Tambah Jadwal</a>
        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Mata Kuliah</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Lab</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $row = 1    
                    @endphp
                    @foreach ($jadwal as $j)
                        <tr>
                            <td scope="row">{{$row}}</td>
                            <td>{{$j->namamatkul}}</td>
                            <td>{{$j->waktu}}</td>
                            <td>{{$j->lab}}</td>
                            <th>
                                <a href="/jadwal/edit/{{$j->id}}">Edit</a>
                                <a href="/jadwal/hapus/{{$j->id}}">Hapus</a>
                            </th>
                        </tr>
                        @php
                        $row +=1   
                        @endphp
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection
