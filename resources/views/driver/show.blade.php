@extends('layouts.main')

@section('content')
<div id="konten">
    <!---------------- FORM TABLE ---------------->
		<div action="" class="form-table">
            <!------- judul ------->
            <div class="title">
                <label for="">Driver</label>
            </div>
            <!------- cari ------->
            <form class="search">
                <label for="">Masukan Nama</label>
                <input type="text" placeholder="Masukan Nama">
            </form>
            <div class="form-button">
                <a href="/driver/create" class="button green"><i class="fas fa-plus"></i>Tambah Driver</a>
            </div>
            <!------- tabel ------->

            <div id="" class="table">
                <table class="" id="tabel-pangkat">
                    <thead>
                    <tr>
                        <th>Nama Karyawan</th>
                        <th>email</th>
                        <th>Plat Nomor</th>
												<th>Merek Mobil</th>
												<th>Tipe Mobil</th>
                        <th>aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($driver as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
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
