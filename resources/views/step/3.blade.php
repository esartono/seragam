@extends('layouts.app')

@section('content')
<div class="col-md-6">
  <div class="card card-solid">
    <div class="card-body">
      <table class="table table-bordered col-md-8 offset-md-2">
        <tr>
          <td>No. Order</td>
          <td><b>{{ $calon->no_order }}</b></td>
        </tr>
        <tr>
          <td>Nama Siswa</td>
          <td>{{ $calon->name }}</td>
        </tr>
        <tr>
          <td>Sekolah</td>
          <td>{{ $calon->jenjang }}IT - Bogor</td>
        </tr>
        <tr>
          <td>Kelas</td>
          <td>{{ $calon->kelas }}</td>
        </tr>
        <tr>
          <td>Ukuran Baju</td>
          <td>{{ $calon->atasan }}</td>
        </tr>
        <tr>
          @if ($jk === 'L')
            <td>Ukuran Celana</td>
          @endif
          @if ($jk === 'P')
            <td>Ukuran Rok</td>
          @endif
          <td>{{ $calon->bawahan }}</td>
        </tr>
        <tr>
          <td colspan="2">
            <form method="POST" action="{{ route('pdf') }}">
              @csrf
              <input type="hidden" name="order" value="{{ $calon->no_order }}">
              <button type="submit" class="btn btn-block btn-danger float-right">Cetak Invoice</button>
            </form>
          </td>
        </tr>
      </table>
    </div>
  </div>
  <!-- /.card-body -->
</div>
<div class="col-md-6">
  <div class="card card-solid">
    <div class="card-body">
      <h5>Tahap selanjutnya silahkan transfer ke rekening :</h5>
      <div class="bg-yellow py-3 px-3 mt-4">
        <h2 class="text-center font-weight-bold">
          Rp. 875.000,-
        </h2>
      </div>
      <div class="bg-gray py-2 px-3">
        <h4 class="mb-0 text-center">
          BCA 8691532232
          <br><small>a.n. Ade Purnama</small>
        </h4>
      </div>
      <hr>
      <a href="/" class="btn btn-lg btn-success col-md-7 p-3 float-right">Selesai</a>
    </div>
  </div>
  <!-- /.card-body -->
</div>
@endsection
