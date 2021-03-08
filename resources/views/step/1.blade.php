@extends('layouts.app')

@section('content')
<div class="card card-solid">
  <div class="card-body">
    <form method="POST" action="{{ route('calons.update', $order) }}">
    @csrf
    <input name="_method" type="hidden" value="PUT">
    <input name="step" type="hidden" value="1">
    <div class="row">
      <div class="col-12 col-sm-6">
        <h2 class="my-3">Pilih Ukuran yang sesuai</h2>
        @if ($errors->any())
          <div class="alert alert-danger"> Anda belum memilih Ukuran</div>
        @endif
        <hr>
        <div class="btn-group btn-group-toggle btn-group-special" data-toggle="buttons" style="display: flex; ">
          <label class="btn btn-warning text-center" style="flex: 1">
            <input type="radio" name="size_option" id="size_option1" value="SS" autocomplete="off">
            <span class="text-xl">SS</span>
          </label>
          <label class="btn btn-warning text-center" style="flex: 1">
            <input type="radio" name="size_option" id="size_option1" value="S" autocomplete="off">
            <span class="text-xl">S</span>
          </label>
          <label class="btn btn-warning text-center" style="flex: 1">
            <input type="radio" name="size_option" id="size_option1" value="M" autocomplete="off">
            <span class="text-xl">M</span>
          </label>
          <label class="btn btn-warning text-center" style="flex: 1">
            <input type="radio" name="size_option" id="size_option1" value="L" autocomplete="off">
            <span class="text-xl">L</span>
          </label>
          <label class="btn btn-warning text-center" style="flex: 1">
            <input type="radio" name="size_option" id="size_option1" value="XL" autocomplete="off">
            <span class="text-xl">XL</span>
          </label>
          <label class="btn btn-warning text-center" style="flex: 1">
            <input type="radio" name="size_option" id="size_option1" value="XXL" autocomplete="off">
            <span class="text-xl">XXL</span>
          </label>
        </div>
        <div class="mt-4">
          <a href="{{ url()->previous() }}" class="btn btn-lg btn-secondary col-md-4 p-3">
            Kembali
          </a>
          <button type="submit" class="btn btn-lg btn-success col-md-4 p-3 float-right">
            Lanjut
          </button>
        </div>
      </div>
      <div class="col-12 col-sm-6">
        <div class="col-12">
          <img src="{{URL::asset('/images/ATAS/'.$jenjang.' - '.$jk.'.png')}}" class="product-image" alt="Product Image">
        </div>
      </div>
    </div>
  </form>
  </div>
  <!-- /.card-body -->
</div>
@endsection
