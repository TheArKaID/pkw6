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
                    <th scope="col">Nama Mata Kuliah</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Lab</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="/jadwal/edit" method="post">
                        {{ csrf_field() }}
                    <tr>
                        <td><input type="text" name="namamatkul" id="namamatkul" value="{{$jadwal->namamatkul}}"></td>
                        <td><input type="text" name="waktu" id="waktu" value="{{$jadwal->waktu}}"></td>
                        <td><input type="text" name="lab" id="lab" value="{{$jadwal->lab}}"></td>
                        <th>
                            <input type="text" name="id" id="id" value="{{$jadwal->id}}" hidden>
                           <button type="submit">Simpan</button>
                        </th>
                    </tr>
                </form>
                </tbody>
            </table>
        </div>
    </div>
@endsection
