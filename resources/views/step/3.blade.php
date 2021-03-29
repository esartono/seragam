@extends('layouts.app')

@section('content')
<div class="col-md-6">
  <div class="card card-solid">
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th colspan="2">Data Input</th>
        </tr>
        <tr>
          <td>No. Order</td>
          <td><b>{{ $calon->no_order }}</b></td>
        </tr>
        <tr>
          <td>No. Pendaftaran PSB</td>
          <td><b>{{ $calon->no_reg }}</b></td>
        </tr>
        <tr>
          <td>Nama Siswa</td>
          <td>{{ $calon->name }}</td>
        </tr>
        <tr>
          <td>Sekolah</td>
          <td>{{ $calon->jenjang }}IT NFBS - Bogor</td>
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
          <td>Batas waktu pembayaran</td>
          <td>
            @if($calon->lewat)
              <b>{{ Carbon\Carbon::parse($calon->created_at)->addDay(7)->format('d/m/Y') }}</b>
            @else
              <b>14/04/2021</b>
            @endif
          </td>
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
          BNI 0607451808
          <br><small>a.n. Soffatul Azizah</small>
        </h4>
      </div>
      <hr>
      <h4>
        <small>
          <ul>
            <li>Konfirmasi pembayaran dan pertanyaan lebih lanjut dapat menghubungi :
              <ul>
                <li><b>Rahmat Jeans (+62 822 7888 9009)</b></li>
                <li><b>Hendri Umar (+62 877 7415 1039)</b></li>
              </ul>
            </li>
          </ul>
        </small>
      </h4>
      <a href="/" class="btn btn-lg btn-success col-md-6 offset-md-3 p-3 mt-3">Selesai</a>
    </div>
  </div>
  <!-- /.card-body -->
</div>
@endsection
