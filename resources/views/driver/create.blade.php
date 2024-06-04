@extends('layouts.main')

@section('content')
<!-- konten -->
<div id="konten">
<style media="screen">
.ck-editor__editable {
  min-height: 250px;
}
</style>
<!---------------- FORM TABLE ---------------->
<form action="{{url('driver/proses')}}" method="post" class="form-table">
  {{ csrf_field() }}
        <!------- judul ------->
        <div class="title">
            <label for="">buat driver</label>
        </div>
        <div class="forminput">
            <label for="">Karyawan</label>
            @error('karyawan')
            <p style="color: red">
              {{ $message }}
            </p>
            @enderror
            <select class="" name="karyawan">
              <option value="">DIPILIH</option>
              @foreach($karyawan as $k)
              <option value="{{$k->id}}">{{$k->name}}</option>
              @endforeach
            </select>
        </div>
        <div class="forminput">
            <label for="">mobil</label>
            @error('mobil')
            <p style="color: red">
              {{ $message }}
            </p>
            @enderror
            <select class="" name="mobil">
              <option value="">DIPILIH</option>
              @foreach($mobil as $m)
              <option value="{{$m->id}}">{{$m->merek}} ~ {{$m->type}}</option>
              @endforeach
            </select>
        </div>

    <div class="form-button">
            <button class="button green">save</button>
            <a href="{{url('/profile')}}" class="button red">kembali</a>
    </div>
  </form>
<!---------------- FORM TABLE END ---------------->
</div>
@endsection
