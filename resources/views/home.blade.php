@extends('layouts.app')

@section('content')
<div class="card card-solid">
  <div class="card-body">
    <div class="row">
      <div class="container mt-2">
        <h4>Data Pemesanan Seragam Nurul Fikri Boarding School - Ciapus Bogor</h4>
        <hr>
        <table class="table table-bordered table-striped">
          <thead>
            <tr class="table-success">
              <th scope="col">#</th>
              <th scope="col">No. Order</th>
              <th scope="col">Nama</th>
              <th scope="col">Sekolah</th>
              <th scope="col">Kelas</th>
              <th scope="col">Ukuran Baju</th>
              <th scope="col">Ukuran Celana/Rok</th>
              <th scope="col">No. Telepon/HP</th>
            </tr>
          </thead>
          <tbody>
            @php
              $i = 1;
            @endphp
            @foreach($calons as $data)
            <tr>
              <th scope="row">{{ (($calons->currentPage()-1)*7) + $i++ }}</th>
              <td>{{ $data->no_order }}</td>
              <td>{{ $data->name }}</td>
              <td>{{ $data->jenjang }}</td>
              <td>{{ $data->kelas }}</td>
              <td>{{ $data->atasan }}</td>
              <td>{{ $data->bawahan }}</td>
              <td>{{ $data->telepon }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="box-footer clearfix">
          {!! $calons->links('pagination::bootstrap-4') !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
