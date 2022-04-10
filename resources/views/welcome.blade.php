@extends('layouts.app')

@section('content')
  <div class="card card-solid">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-sm-7">
          <div class="col-12">
            {{-- <img src="images/SMP4.jpeg" class="product-image" alt="Product Image"> --}}
            <iframe width="560" height="315" src="http://www.youtube.com/embed/nCUjIS6Gsww?modestbranding=1&autoplay=1&loop=1&rel=0" frameborder="0"></iframe>
          </div>
        </div>
        <div class="col-12 col-sm-5">
          <h3 class="my-3">Jasa Jahit Seragam</h3>
          <p>Kami menyediakan jasa jahit seragam</p>
          <hr>
          <div class="bg-gray py-2 px-3 mt-4">
            <h3 class="mb-0">
            </h3>
          </div>
          <h4>
            Harga Jasa Jahit paket lengkap <br><b>Rp. 875.000,-</b>
          </h4>

          <div class="mt-3">
            <a href="order" class="btn btn-primary btn-lg btn-flat p-3">
              <i class="fas fa-cart-plus fa-lg mr-2"></i>
              Pesan Sekarang
            </a>
          </div>
          <hr>
          <h5>Konfirmasi Pembayaran dapat menghubungi : Ibu Shofa (+62 857 1708 7766)</h5>
          <hr>
          <h5 class="mt-2">
            Layanan Komplain dapat menghubungi :
            <div class="mt-3"></div>
            <b>Rahmat Jeans (+62 822 7888 9009)
            <div class="mt-1"></div>
            Hendri Umar (+62 877 7415 1039)</b>
          </h5>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
