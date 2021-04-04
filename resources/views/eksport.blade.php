<!DOCTYPE html>
<html>
<head>
	<title>Rekapitulasi Input Seragam NFBS-Bogor</title>
</head>
@php
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=rekapNFBS.xls");
@endphp
<body>
<table class="table table-bordered table-striped">
  <tr class="table-success">
    <th scope="col" rowspan="2">#</th>
    <th scope="col" rowspan="2">No. Pendaftaran PSB</th>
    <th scope="col" rowspan="2">Nama</th>
    <th scope="col" rowspan="2">Sekolah</th>
    <th scope="col" rowspan="2">Kelas</th>
    <th scope="col" colspan="2">Ukuran</th>
    <th scope="col" rowspan="2">No. Telepon/HP</th>
    <th scope="col" rowspan="2">LUNAS</th>
    <th scope="col" rowspan="2">Hapus</th>
  </tr>
  <tr class="table-success">
    <th scope="col">Baju</th>
    <th scope="col">Celana/Rok</th>
  </tr>
  @php
    $i = 1;
  @endphp
  @foreach($calons as $data)
  <tr>
    <th scope="row">{{ $i++ }}</th>
    <td>{{ $data->no_reg }}</td>
    <td>{{ $data->name }}</td>
    <td>{{ $data->jenjang }}</td>
    <td>{{ $data->kelas }}</td>
    <td>{{ $data->atasan }}</td>
    <td>{{ $data->bawahan }}</td>
    <td>'{{ $data->telepon }}</td>
    @if($data->lunas == 0)
      <td>Belum</td>
    @endif
    @if($data->lunas == 1)
      <td>Sudah</td>
    @endif
    <td>HAPUS</td>
  </tr>
  @endforeach
</table>
</body>
</html>
