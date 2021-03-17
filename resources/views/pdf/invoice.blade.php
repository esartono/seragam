<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Invoice - {{ $calon->no_order }}</title>
  <style>
    .unpaid {
      width: 100%;
    }
    .unpaid th{
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: center;
      background-color: red;
      color: white;
    }
    .paid {
      width: 100%;
    }
    .paid th{
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: center;
      background-color: lightgreen;
      color: white;
    }
    .header{
      width: 100%;
      margin-top: -70px;
    }
    .to{
      width: 100%;
      margin-bottom: 30px;
    }
    .isi{
      width: 100%;
      border-collapse: collapse;
    }
    .isi th{
      padding-top: 12px;
      padding-bottom: 12px;
      background-color: lightgreen;
      border: 1px solid black;
    }
    .isi td{
      padding: 15px;
      border: 1px solid black;
    }
  </style>

</head>
<body>
@if ($calon->lunas === 0)
  <table class="unpaid">
    <tr>
      <th>BELUM LUNAS</th>
    </tr>
  </table>
@endif
@if ($calon->lunas === 1)
  <table class="paid">
    <tr>
      <th>LUNAS</th>
    </tr>
  </table>
@endif
<br>
<img src="{{ public_path('images/logo.jpeg') }}" style="auto; height: 100px; margin-top: 10px">
<img class="" src="data:image/png;base64, {!! $calon->qrcode !!}" style="float: right">
<table class="header">
  <tr>
    <th>INVOICE</th>
  </tr>
</table>
<hr>

<table class="to">
  <tr>
    <td width="60%">
      Ditujukan untuk : <br>
      Orangtua/Wali dari <br>
      <b>{{ $calon->name }} <br><br>
      No. Pendaftaran : {{ $calon->no_reg }})</b> <br>
      Alamat : {{ $calon->alamat }} <br>
      No. Telpon : {{ $calon->telepon }}
    </td>
    <td align="right">
      No. Order : <b>{{ $calon->no_order }}</b> <br>
      Tanggal : {{ Carbon\Carbon::parse($calon->created_at)->format('d/m/Y') }}<br>
      <br>
      Pembayaran paling lambat: <br>
      <b>{{ Carbon\Carbon::parse($calon->created_at)->addDay(7)->format('d/m/Y') }}</b>
    </td>
  </tr>
</table>
<table class="isi">
  <tr>
    <th>No.</th>
    <th>Deskripsi</th>
    <th>Harga</th>
  </tr>
  <tr>
    <td align="center">1</td>
    <td>
      1 Set Seragam Nurul Fikri Boarding School Bogor dengan ukuran sebagai berikut : <br>
      <ul>
        <li>Baju atau Blouse : {{ $calon->atasan }}</li>
        <li>Celana atau Rok : {{ $calon->bawahan }}</li>
      </ul>
    </td>
    <td align="right">Rp. 875.000,-</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th colspan="2">TOTAL</th>
    <th align="right">Rp. 875.000,-</th>
  </tr>
  <tr>
    <td colspan="3">
      <i>Terbilang : Delapan Ratus Tujuh Puluh Lima Ribu Rupiah</i>
      <p>Pembayaran dilakukan melalui transfer ke rekening :</p>
      <h2>BCA 8691532232</h2>
      <h3>a.n. Ade Purnama</h3>
      <hr>
      <h3> Pertanyaan lebih lanjut dapat menghubungi :<br>
        <b>Rahmat Jeans (+62 822 7888 9009)<br>
          Hendri Umar (+62 877 7415 1039)</b>
      </h3>
    </td>
  </tr>
</table>

<br>
<small>
  Catatan :
  <ol>
    <li>Dokumen ini dibuat secara otomatis oleh sistem</li>
    <li>Dokumen ini sah sebagai invoice dari RJ Collection</li>
    <li>Dokumen ini bukanlah bukti pembayaran</li>
  </ol>
</small>
