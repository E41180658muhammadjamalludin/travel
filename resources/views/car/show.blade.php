@extends('layouts.main')

@section('content')
<div id="konten">
    <!---------------- FORM TABLE ---------------->
		<div action="" class="form-table">
            <!------- judul ------->
            <div class="title">
                <label for="">Mobil</label>
            </div>
            <!------- cari ------->
            <form class="search">
                <label for="">Masukan Nama</label>
                <input type="text" placeholder="Masukan Nama">
            </form>
            <div class="form-button">
                <a href="/car/create" class="button green"><i class="fas fa-plus"></i>Tambah Mobil</a>
            </div>
            <!------- tabel ------->

            <div id="" class="table">
                <table class="" id="tabel-pangkat">
                    <thead>
                    <tr>
                        <th>Plat Nomor</th>
                        <th>Merek</th>
                        <th>Type</th>
                        <th>aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($car as $data)
                    <tr>
                        <td>{{$data->plat_nomor}}</td>
                        <td>{{$data->merek}}</td>
                        <td>{{$data->type}}</td>
                        <td>
                            <div class="formbutton">
                                <a href="/car/edit/{{$data->id}}" class="white">Edit</a>
                                <a href="/car/hapus/{{$data->id}}" class="white">Hapus</a>
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
