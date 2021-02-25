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
        <div class="form-group">
          <label for="inputName">Nama Lengkap Siswa</label>
          <input type="text" id="inputName" class="form-control">
        </div>
        <div class="form-group">
          <label for="inputStatus">Kelas</label>
          <select class="form-control custom-select">
            <option selected disabled>Pilih Kelas</option>
            <option>Siswa Baru</option>
            <option>Kelas VII</option>
            <option>Kelas VIII</option>
            <option>Kelas IX</option>
          </select>
        </div><div class="form-group">
          <label for="inputStatus">Jenis Kelamin</label>
          <select class="form-control custom-select">
            <option selected disabled>Pilih Kelamin</option>
            <option>Laki-laki</option>
            <option>Perempuan</option>
          </select>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <a href="/" class="btn btn-lg btn-secondary col-md-4 p-3">Batal</a>
    <a href="/order/1" class="btn btn-lg btn-success col-md-4 p-3 float-right">Lanjut</a>
    {{-- <input type="submit" value="Lanjut" class="btn btn-success col-md-4 float-right"> --}}
  </div>
@endsection