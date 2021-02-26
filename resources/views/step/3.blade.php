@extends('layouts.app')

@section('content')
<div class="col-md-6">
  <div class="card card-solid">
    <div class="card-body">
      <h2>Order Nomor : 2102262345</h2>
      <hr>
      <h4>Telah kami terima, untuk selanjutnya silahkan transfer ke rekening :</h4>
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
