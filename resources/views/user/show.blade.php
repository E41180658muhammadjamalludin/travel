@extends('layouts.main')

@section('content')
<div id="konten">
    <!---------------- FORM TABLE ---------------->
		<div action="" class="form-table">
            <!------- judul ------->
            <div class="title">
                <label for="">User</label>
            </div>
            <!------- cari ------->
            <form class="search">
                <label for="">Masukan Nama</label>
                <input type="text" placeholder="Masukan Nama">
            </form>
            <div class="form-button">
                <a href="/user/create" class="button green"><i class="fas fa-plus"></i>Buat user</a>
            </div>
            <!------- tabel ------->

            <div id="" class="table">
                <table class="" id="tabel-pangkat">
                    <thead>
                    <tr>
                        <th>NAMA</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Akses</th>
                        <th>aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($user as $data)
                    <tr>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->password}}</td>
                        <td>{{$data->level}}</td>
                        <td>
                            <div class="formbutton">
                                <a href="/user/edit/{{$data->id}}" class="white">Edit</a>
                                <a href="/user/hapus/{{$data->id}}" class="white">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    <!---------------- FORM TABLE END ---------------->
    </div>
@endsection
