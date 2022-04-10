@extends('layouts.app')

@section('content')
<style>
  input, button {
    display: none;
  }
</style>
<div class="card card-solid">
  <div class="card-body">
    <form method="POST" action="{{ route('calons.update', $order) }}">
    @csrf
    <input name="_method" type="hidden" value="PUT">
    <input name="step" type="hidden" value="2">
    <div class="row">
      <div class="col-12 col-sm-6">
        <h2 class="my-3">Pilih Ukuran yang sesuai</h2>
        @if ($errors->any())
          <div class="alert alert-danger"> Anda belum memilih Ukuran</div>
        @endif
        <hr>
        <div class="btn-group btn-group-toggle btn-group-special space" data-toggle="buttons" style="display: flex; ">
          <label class="btn btn-warning text-center space" style="flex: 1">
            <input type="submit" name="size_option" value="SS" autocomplete="off">
            <span class="text-xl">SS</span>
          </label>
          <label class="btn btn-warning text-center space" style="flex: 1">
            <input type="submit" name="size_option" value="S" autocomplete="off">
            <span class="text-xl">S</span>
          </label>
          <label class="btn btn-warning text-center space" style="flex: 1">
            <input type="submit" name="size_option" value="M" autocomplete="off">
            <span class="text-xl">M</span>
          </label>
          <label class="btn btn-warning text-center space" style="flex: 1">
            <input type="submit" name="size_option" value="L" autocomplete="off">
            <span class="text-xl">L</span>
          </label>
          <label class="btn btn-warning text-center space" style="flex: 1">
            <input type="submit" name="size_option" value="XL" autocomplete="off">
            <span class="text-xl">XL</span>
          </label>
          <label class="btn btn-warning text-center space" style="flex: 1">
            <input type="submit" name="size_option" value="XXL" autocomplete="off">
            <span class="text-xl">XXL</span>
          </label>
        </div>
        <hr>
        <div class="btn-group btn-group-toggle btn-group-special space" data-toggle="buttons" style="display: flex; ">
          <label class="btn btn-info text-center space" style="flex: 1">
            <button type="button" data-toggle="modal" data-target="#customSize"></button>
            <span class="text-lg">Ukuran Kustom</span>
          </label>
        </div>
        <div class="mt-4">
          <a href="{{ url()->previous() }}" class="btn btn-lg btn-secondary col-md-4 p-3">
            Kembali
          </a>
          {{-- <button type="submit" class="btn btn-lg btn-success col-md-4 p-3 float-right">
            Lanjut
          </button> --}}
        </div>
      </div>
      <div class="col-12 col-sm-6">
        <div class="col-12">
          <img src="{{URL::asset('/images/BAWAH/'.$jenjang.' - '.$jk.'.png')}}" class="product-image" alt="Product Image">
        </div>
      </div>
    </div>
  </form>
  </div>
  <!-- /.card-body -->
</div>
<!-- Modal -->
<div class="modal fade" id="customSize" tabindex="-1" aria-labelledby="customSizeLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="{{ route('calons.update', $order) }}">
        @csrf
        <input name="_method" type="hidden" value="PUT">
        <input name="step" type="hidden" value="1">
        <input name="size_option" type="hidden" value="custom">
        <div class="modal-header">
          <h5 class="modal-title" id="customSizeLabel">Input Ukuran Bawahan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-sm-6 col-form-label">Lingkar Pinggang</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="keterangan['lingkar_pinggang']">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-6 col-form-label">Panjang Celana/Rok</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="keterangan['panjang_bawahan']">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Lanjutkan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
