@extends('layouts.app')

@section('content')
  <div class="col-md-6">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Order</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        </div>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('calons.store') }}">
        @csrf
        <div class="form-group">
          <label for="inputName">Nomor Pendaftaran PSB</label>
          <input type="text" name="no_reg" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="inputName">Nama Lengkap Siswa</label>
          <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="inputStatus">Sekolah</label>
          <select class="form-control custom-select" name="jenjang" required>
            <option selected disabled>Pilih Sekolah</option>
            <option value="SMP">SMPIT NFBS - Bogor</option>
            <option value="SMA">SMAIT NFBS - Bogor</option>
          </select>
        </div>
        <div class="form-group">
          <label for="inputKelas">Kelas</label>
          <input type="text" name="kelas" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="inputStatus">Jenis Kelamin</label>
          <select class="form-control custom-select" name="jk" required>
            <option selected disabled>Pilih Kelamin</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
          </select>
        </div>
        <div class="form-group">
          <label for="inputTelepon">No. Telepon/HP</label>
          <input type="text" name="telepon" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="inputEmail">Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="inputAlamat">Alamat</label>
          <input type="text" name="alamat" class="form-control" required>
        </div>
        <a href="/" class="btn btn-lg btn-secondary col-md-4 p-3">Batal</a>
        <button type="submit" class="btn btn-lg btn-success col-md-4 p-3 float-right">Lanjut</button>
      </div>
    </form>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    {{-- <input type="submit" value="Lanjut" class="btn btn-success col-md-4 float-right"> --}}
  </div>
@endsection
