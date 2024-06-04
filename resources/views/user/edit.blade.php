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
<form action="{{url('user/update')}}" method="post" class="form-table">
  {{ csrf_field() }}
			@foreach ($user as $s)
        <!------- judul ------->
        <div class="title">
            <label for="">edit user</label>
        </div>
        <div class="forminput">
            <label for="">nama</label>
            @error('nama')
            <p style="color: red">
              {{ $message }}
            </p>
            @enderror
            <input type="text" name="nama" value="{{$s->name}}" placeholder="nama">
        </div>
        <div class="forminput">
            <label for="">email</label>
            @error('email')
            <p style="color: red">
              {{ $message }}
            </p>
            @enderror
            <input type="email" name="email" value="{{$s->email}}" placeholder="email">
        </div>
        <div class="forminput">
            <label for="">password <p style="color: red">(Kosongkan jika tidak diubah kata sandi)</p> </label>
            @error('password')
            <p style="color: red">
              {{ $message }}
            </p>
            @enderror
            <input type="password" name="password" value="" placeholder="password">
        </div>
        <div class="forminput">
            <label for="">Hak akses</label>
            @error('akses')
            <p style="color: red">
              {{ $message }}
            </p>
            @enderror
            <select class="" name="akses">
              <option value="">Dipilih</option>
              <option @if ($s->level == '1') selected @endif value="1">1</option>
              <option @if ($s->level == '2') selected @endif value="2">2</option>
            </select>
						<input type="hidden" value="{{$s->id}}" name="id">
        </div>
		@endforeach
    <div class="form-button">
            <button class="button green">save</button>
            <a href="{{url('/profile')}}" class="button red">kembali</a>
    </div>
  </form>
<!---------------- FORM TABLE END ---------------->
</div>
@endsection
