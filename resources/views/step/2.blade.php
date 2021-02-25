@extends('layouts.app')

@section('content')
<div class="card card-solid">
  <div class="card-body">
    <div class="row">
      <div class="col-12 col-sm-6">
        <h2 class="my-3">Pilih Ukuran yang sesuai</h2>
        <hr>
        <div class="btn-group btn-group-toggle btn-group-special" data-toggle="buttons" style="display: flex; ">
          <label class="btn btn-warning text-center" style="flex: 1">
            <input type="radio" name="color_option" id="color_option1" autocomplete="off">
            <span class="text-xl">SS</span>
          </label>
          <label class="btn btn-warning text-center" style="flex: 1">
            <input type="radio" name="color_option" id="color_option1" autocomplete="off">
            <span class="text-xl">S</span>
          </label>
          <label class="btn btn-warning text-center" style="flex: 1">
            <input type="radio" name="color_option" id="color_option1" autocomplete="off">
            <span class="text-xl">M</span>
          </label>
          <label class="btn btn-warning text-center" style="flex: 1">
            <input type="radio" name="color_option" id="color_option1" autocomplete="off">
            <span class="text-xl">L</span>
          </label>
          <label class="btn btn-warning text-center" style="flex: 1">
            <input type="radio" name="color_option" id="color_option1" autocomplete="off">
            <span class="text-xl">XL</span>
          </label>
          <label class="btn btn-warning text-center" style="flex: 1">
            <input type="radio" name="color_option" id="color_option1" autocomplete="off">
            <span class="text-xl">XXL</span>
          </label>
        </div>
        <div class="mt-4">
          <a href="/order/3" class="btn btn-lg btn-success col-md-4 p-3 float-right">
            Lanjut
          </a>
        </div>
      </div>
      <div class="col-12 col-sm-6">
        <div class="col-12">
          <img src="../images/RJ3.PNG" class="product-image" alt="Product Image">
        </div>
      </div>
    </div>
  </div>
  <!-- /.card-body -->
</div>
@endsection
