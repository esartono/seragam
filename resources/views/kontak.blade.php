@extends('layouts.app')

@section('content')

<div class="col-md-8">
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="700" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Rahmat%20Jeans%20Depok&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="1" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <style>
                .mapouter {
                    position:relative;
                    text-align:right;
                    height:500px;
                    width:700px;
                }
                .gmap_canvas {
                    overflow:hidden;
                    background:none!important;
                    height:500px;
                    width:700px;
                }
            </style>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Kontak</h3>
        </div>
        <div class="card-body">
            <h4 class="mb-4">
                <small>Alamat Toko dan Workshop :</small><br><br>
                Jl. Margonda Raya No. 489, Depok - Jawa Barat
            </h4>
            <hr>
            <h4>
                <small>Pertanyaan lebih lanjut dapat menghubungi : </small> <br><hr>
                Rahmat Jeans <br>
                <small>+62 822 7888 9009</small>
                <hr>
                Hendri Umar <br>
                <small>+62 877 7415 1039</small>
            </h4>
            <hr>
            <h4>Konfirmasi Pembayaran dapat menghubungi : Ibu Shofa (+62 857 1708 7766)</h4>
        </div>
    </div>
</div>
@endsection
