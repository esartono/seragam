@extends('layouts.app')

@section('content')
<div class="card card-solid">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="col-12">
            <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/prod-1.jpg" class="product-image" alt="Product Image">
          </div>
          <div class="col-12 product-image-thumbs">
            <div class="product-image-thumb active"><img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/prod-1.jpg" alt="Product Image"></div>
            <div class="product-image-thumb"><img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/prod-2.jpg" alt="Product Image"></div>
            <div class="product-image-thumb"><img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/prod-3.jpg" alt="Product Image"></div>
            <div class="product-image-thumb"><img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/prod-4.jpg" alt="Product Image"></div>
            <div class="product-image-thumb"><img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/prod-5.jpg" alt="Product Image"></div>
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <h3 class="my-3">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
          <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>

          <hr>

          <h4 class="mt-3">Size <small>Please select one</small></h4>
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-default text-center">
              <input type="radio" name="color_option" id="color_option1" autocomplete="off">
              <span class="text-xl">XS</span>
              <br>
              Xtra-Small
            </label>
            <label class="btn btn-default text-center">
              <input type="radio" name="color_option" id="color_option1" autocomplete="off">
              <span class="text-xl">S</span>
              <br>
              Small
            </label>
            <label class="btn btn-default text-center">
              <input type="radio" name="color_option" id="color_option1" autocomplete="off">
              <span class="text-xl">M</span>
              <br>
              Medium
            </label>
            <label class="btn btn-default text-center">
              <input type="radio" name="color_option" id="color_option1" autocomplete="off">
              <span class="text-xl">L</span>
              <br>
              Large
            </label>
            <label class="btn btn-default text-center">
              <input type="radio" name="color_option" id="color_option1" autocomplete="off">
              <span class="text-xl">XL</span>
              <br>
              Xtra-Large
            </label>
          </div>

          <div class="bg-gray py-2 px-3 mt-4">
            <h2 class="mb-0">
              Rp. 1.000.000,-
            </h2>
          </div>

          <div class="mt-4">
            <div class="btn btn-primary btn-lg btn-flat">
              <i class="fas fa-cart-plus fa-lg mr-2"></i> 
              Pesan Sekarang
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
