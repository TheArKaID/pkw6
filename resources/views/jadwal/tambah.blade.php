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
                    <form action="/jadwal/tambahs" method="post">
                        {{ csrf_field() }}
                    <tr>
                        <td><input type="text" name="namamatkul" id="namamatkul"></td>
                        <td><input type="text" name="waktu" id="waktu"></td>
                        <td><input type="text" name="lab" id="lab"></td>
                        <th>
                           <button type="submit">tambah</button>
                        </th>
                    </tr>
                </form>
                </tbody>
            </table>
        </div>
    </div>
@endsection
