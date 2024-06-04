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
<form action="{{url('car/proses')}}" method="post" class="form-table">
  {{ csrf_field() }}
        <!------- judul ------->
        <div class="title">
            <label for="">buat user</label>
        </div>
        <div class="forminput">
            <label for="">plat_nomor</label>
            @error('plat_nomor')
            <p style="color: red">
              {{ $message }}
            </p>
            @enderror
            <input type="text" name="plat_nomor" placeholder="plat_nomor">
        </div>
        <div class="forminput">
            <label for="">merek</label>
            @error('merek')
            <p style="color: red">
              {{ $message }}
            </p>
            @enderror
            <input type="text" name="merek" placeholder="merek">
        </div>
        <div class="forminput">
            <label for="">type</label>
            @error('type')
            <p style="color: red">
              {{ $message }}
            </p>
            @enderror
            <input type="text" name="type" placeholder="type">
        </div>

    <div class="form-button">
            <button class="button green">save</button>
            <a href="{{url('/profile')}}" class="button red">kembali</a>
    </div>
  </form>
<!---------------- FORM TABLE END ---------------->
</div>
@endsection
