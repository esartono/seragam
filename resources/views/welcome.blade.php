@extends('layouts.app')

@section('content')
  <div class="card card-solid">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="col-12">
            <img src="images/SMP4.jpeg" class="product-image" alt="Product Image">
          </div>
          <div class="col-12 product-image-thumbs">
            <div class="product-image-thumb active"><img src="images/SMP4.jpeg" alt="Product Image"></div>
            <div class="product-image-thumb"><img src="images/SMP3.jpeg" alt="Product Image"></div>
            <div class="product-image-thumb"><img src="images/SMP2.jpeg" alt="Product Image"></div>
            <div class="product-image-thumb"><img src="images/SMP1.jpeg" alt="Product Image"></div>
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <h3 class="my-3">Jasa Jahit Seragam</h3>
          <p>Kami menyediakan jasa jahit seragam</p>

          <hr>

          <h4 class="mt-3"><small>Ukuran yang tersedia adalah</small></h4>
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-default text-center">
              <input type="radio" name="color_option" id="color_option1" autocomplete="off">
              <span class="text-xl">SS</span>
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
            <label class="btn btn-default text-center">
              <input type="radio" name="color_option" id="color_option1" autocomplete="off">
              <span class="text-xl">XXL</span>
              <br>
              Xtra-Xtra-Large
            </label>
          </div>

          <div class="bg-gray py-2 px-3 mt-4">
            <h3 class="mb-0">
            </h3>
          </div>
          <p>
            Harga Jasa Jahit Rp. 160.000,- / stel <br>
            Harga Jasa Jahit paket lengkap Rp. 875.000,-
          </p>

          <div class="mt-4">
            <a href="order" class="btn btn-primary btn-lg btn-flat p-3">
              <i class="fas fa-cart-plus fa-lg mr-2"></i>
              Pesan Sekarang
            </a>
          </div>

        </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
