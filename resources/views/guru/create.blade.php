@extends('layouts.master')
@section('title','Tambah Data Guru')
@section('content')

<div class="row">
  <div class="col-md-6">
    <form action="/guru/insert" , method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="text" name="nama" class="form-control" placeholder="Nama" 
          value="{{ old('nama') }}" />
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
          value="{{ old('nip') }}" />
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
          value="{{ old('jabatan') }}" />
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
          value="{{ old('pendidikan') }}" />
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
          value="{{ old('tempat_lahir') }}" />
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
          value="{{ old('tanggal_lahir') }}" />
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
          value="{{ old('telp') }}" />
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
          value="{{ old('alamat') }}" />
        </div>
        <div class="text-danger">
          @error('alamat')
          {{$message}}
          @enderror
        </div>
      </div>
      <div class="form-group">
          <label>Photo</label>
          <input type="file" name="photo" value="{{ old('photo') }}" />
      </div>
      <div class="text-danger">
          @error('photo')
          {{$message}}
          @enderror
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
    $('guru-table').DataTable();
  })
</script>
@endpush