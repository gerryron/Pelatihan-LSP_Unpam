@extends('layouts.master')
@section('title','Edit Data Guru')
@section('content')

<div class="row">
  <div class="col-md-6">
    <form action="/guru/update/{{$guru->id}}" , method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="text" name="nama" class="form-control" placeholder="Nama" 
          value="{{ $guru->nama }}" />
        </div>
        <div class="text-danger">
          @error('nama')
          {{$message}}
          @enderror
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-book"></i></span>
          <input type="text" name="nip" class="form-control" placeholder="NIP" 
          value="{{ $guru->nip }}" />
        </div>
        <div class="text-danger">
          @error('nip')
          {{$message}}
          @enderror
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
          <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" 
          value="{{ $guru->jabatan }}" />
        </div>
        <div class="text-danger">
          @error('jabatan')
          {{$message}}
          @enderror
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
          <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan" 
          value="{{ $guru->pendidikan }}" />
        </div>
        <div class="text-danger">
          @error('pendidikan')
          {{$message}}
          @enderror
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-bank"></i></div>
          <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat lahir"
          data-inputmask="&quot;mask&quot;:&quot;(999) 999-9999&quot;" data-mask="" 
          value="{{ $guru->tempat_lahir }}" />
        </div>
        <div class="text-danger">
          @error('tempat_lahir')
          {{$message}}
          @enderror
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
          <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal lahir"
          data-inputmask="&quot;mask&quot;:&quot;(999) 999-9999&quot;" data-mask="" 
          value="{{ $guru->tanggal_lahir }}" />
        </div>
        <div class="text-danger">
          @error('tanggal_lahir')
          {{$message}}
          @enderror
        </div>
      </div>
      <div class="form-group">
        <select name="agama" class="form-control">
          <option>Islam</option>
          <option>Kristen</option>
          <option>Hindu</option>
          <option>Buddha</option>
          <option>Lainnya</option>
        </select>
        <div class="text-danger">
          @error('agama')
          {{$message}}
          @enderror
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-phone"></i></span>
          <input type="text" name="telp" class="form-control" placeholder="No Telp"
          data-inputmask="&quot;mask&quot;:&quot;(999) 999-9999&quot;" data-mask=""
          value="{{ $guru->telp }}" />
        </div>
        <div class="text-danger">
          @error('telp')
          {{$message}}
          @enderror
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
          <input type="text" name="alamat" class="form-control" placeholder="Alamat"
          data-inputmask="&quot;mask&quot;:&quot;(999) 999-9999&quot;" data-mask=""
          value="{{ $guru->alamat }}" />
        </div>
        <div class="text-danger">
          @error('alamat')
          {{$message}}
          @enderror
        </div>
      </div>
      <div class="col-sm 12">
        <div class="com-sm 6">
          <img src="{{ url('images/'.$guru->photo) }}" alt="user photo" width="100px" />
        </div>
        <div class="col-sm 6">
          <div class="form-group">
            <label>Photo</label>
            <input type="file" name="photo" value="{{ $guru->photo }}" />
          </div>
          <div class="text-danger">
            @error('photo')
            {{$message}}
            @enderror
          </div>
        </div>
      </div>
      
      <div>
        <a href="/guru" class="btn btn-success btn-sm">Close</a>
        <button class="btn btn-primary btn-sm">Save</button>
      </div>  
    </form>
  </div>
</div>
@endsection
@push('scripts')
<script>
  $(function() {
    $('#guru-table').DataTable();
  })
</script>
@endpush