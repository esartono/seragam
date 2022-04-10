@extends('layouts.app')

@section('content')
<style>
  th {
    text-align: center;
    vertical-align: middle !important;
  }
  td {
    vertical-align: middle !important;
  }
  .table-sm td {
    text-align: center;
  }
  .progress-bar1 {
    background-color: #fff;
  }
  .progress-bar2 {
    background-color: #dc3545;
  }
</style>
<div class="card card-solid">
  <div class="card-body">
    <h4 class="mb-4">
      Data Pemesanan Seragam Nurul Fikri Boarding School - Ciapus Bogor
      <a href="/eksport" class="btn btn-success float-right">Export Excel</a>
    </h4>
    <div class="row">
      <div class="col-md-6 col-sm-6 col-12">
        <div class="info-box bg-gradient-info">
          <div class="info-box-content">
            <h4>Jenjang SMP</h4>
            <div class="progress" style="height: 15px">
              <div class="progress-bar1" style="width: {{ $smp['lunas'] }}%"></div>
              <div class="progress-bar2" style="width: {{ 100-$smp['lunas'] }}%"></div>
            </div>
            <span class="progress-description">Konfirmasi Pembayaran : {{ $smp['l'] }}/{{ $smp['t'] }}</span>
            <table class="table table-sm table-bordered table-striped mt-3">
              <thead class="thead-dark">
                <tr>
                  <th width="30%">Ukuran</th>
                  <th width="35%">Baju</th>
                  <th width="30%">Celana/Rok</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>SS</td>
                  <td>{{ $smp['ss_a'] }}</td>
                  <td>{{ $smp['ss_b'] }}</td>
                </tr>
                <tr>
                  <td>S</td>
                  <td>{{ $smp['s_a'] }}</td>
                  <td>{{ $smp['s_b'] }}</td>
                </tr>
                <tr>
                  <td>M</td>
                  <td>{{ $smp['m_a'] }}</td>
                  <td>{{ $smp['m_b'] }}</td>
                </tr>
                <tr>
                  <td>L</td>
                  <td>{{ $smp['l_a'] }}</td>
                  <td>{{ $smp['l_b'] }}</td>
                </tr>
                <tr>
                  <td>XL</td>
                  <td>{{ $smp['xl_a'] }}</td>
                  <td>{{ $smp['xl_b'] }}</td>
                </tr>
                <tr>
                  <td>XXL</td>
                  <td>{{ $smp['xxl_a'] }}</td>
                  <td>{{ $smp['xxl_b'] }}</td>
                </tr>
              </tbody>
              <thead class="thead-dark">
                <tr>
                  <th>TOTAL</th>
                  <th>{{ $smp['t'] }}</th>
                  <th>{{ $smp['t'] }}</th>
                </tr>
              </thead>
            </table>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-6 col-sm-6 col-12">
        <div class="info-box bg-gradient-warning">
          <div class="info-box-content">
            <h4>Jenjang SMA</h4>
            <div class="progress" style="height: 15px">
              <div class="progress-bar1" style="width: {{ $sma['lunas'] }}%"></div>
              <div class="progress-bar2" style="width: {{ 100-$sma['lunas'] }}%"></div>
            </div>
            <span class="progress-description">Konfirmasi Pembayaran : {{ $sma['l'] }}/{{ $sma['t'] }}</span>
            <table class="table table-sm table-bordered table-striped mt-3">
              <thead class="thead-dark">
                <tr>
                  <th width="30%">Ukuran</th>
                  <th width="35%">Baju</th>
                  <th width="30%">Celana/Rok</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>SS</td>
                  <td>{{ $sma['ss_a'] }}</td>
                  <td>{{ $sma['ss_b'] }}</td>
                </tr>
                <tr>
                  <td>S</td>
                  <td>{{ $sma['s_a'] }}</td>
                  <td>{{ $sma['s_b'] }}</td>
                </tr>
                <tr>
                  <td>M</td>
                  <td>{{ $sma['m_a'] }}</td>
                  <td>{{ $sma['m_b'] }}</td>
                </tr>
                <tr>
                  <td>L</td>
                  <td>{{ $sma['l_a'] }}</td>
                  <td>{{ $sma['l_b'] }}</td>
                </tr>
                <tr>
                  <td>XL</td>
                  <td>{{ $sma['xl_a'] }}</td>
                  <td>{{ $sma['xl_b'] }}</td>
                </tr>
                <tr>
                  <td>XXL</td>
                  <td>{{ $sma['xxl_a'] }}</td>
                  <td>{{ $sma['xxl_b'] }}</td>
                </tr>
              </tbody>
              <thead class="thead-dark">
                <tr>
                  <th>TOTAL</th>
                  <th>{{ $sma['t'] }}</th>
                  <th>{{ $sma['t'] }}</th>
                </tr>
              </thead>
            </table>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <div class="row">
      <div class="container mt-2">
        <table class="table table-bordered table-striped">
          <thead>
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
          </thead>
          <tbody>
            @php
              $i = 1;
            @endphp
            @foreach($calons as $data)
            <tr>
              <th scope="row">{{ (($calons->currentPage()-1)*10) + $i++ }}</th>
              <td>{{ $data->no_reg }}</td>
              <td>{{ $data->name }}</td>
              <td>{{ $data->jenjang }}</td>
              <td>{{ $data->kelas }}</td>
              <td>{{ $data->atasan }}</td>
              <td>{{ $data->bawahan }}</td>
              <td>{{ $data->telepon }}</td>
              @if($data->lunas == 0)
                <td>
                  <button type="button"
                    class="btn btn-danger"
                    data-toggle="modal"
                    data-target="#lunas"
                    data-nama="{{ $data->name }}"
                    data-reg="{{ $data->no_reg }}"
                    data-page="{{ $calons->currentPage() }}"
                  >
                    Belum
                  </button>
                </td>
              @endif
              @if($data->lunas == 1)
                <td><button type="button" class="btn btn-success">Sudah</button></td>
              @endif
              <td>
                <button type="button"
                  class="btn btn-warning"
                  data-toggle="modal"
                  data-target="#hapus"
                  data-nama="{{ $data->name }}"
                  data-id="{{ $data->id }}"
                  data-reg="{{ $data->no_reg }}"
                  data-page="{{ $calons->currentPage() }}"
                >
                  HAPUS
                </button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="box-footer clearfix float-right">
          {!! $calons->links('pagination::bootstrap-4') !!}
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="lunas" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Konfirmasi Pembayaran</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('lunas') }}">
          @csrf
          <input type="hidden" value="" name="reg" id="reg">
          <input type="hidden" value="" name="page" id="page">
          <table class="table ">
            <tr>
              <td>No. Pendaftaran</td>
              <td><label id="psb"></label></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td><label id="nama"></label></td>
            </tr>
          </table>
          <div class="btn-group btn-block" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Belum</button>
            <button type="submit" class="btn btn-success">Sudah</button>
          </div>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="hapus" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Hapus Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('hapus') }}">
          @csrf
          <input type="hidden" value="" name="id" id="id">
          <input type="hidden" value="" name="page" id="page_h">
          <table class="table">
            <tr>
              <td>No. Pendaftaran</td>
              <td><label id="psb_h"></label></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td><label id="nama_h"></label></td>
            </tr>
          </table>
          <div class="btn-group btn-block" role="group">
            <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-danger">Hapus</button>
          </div>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@endsection

@section('script')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    $('#lunas').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var nama = button.data('nama')
      var reg = button.data('reg')
      var page = button.data('page')
      $('#reg').val(reg)
      $('#page').val(page)
      $('#nama').text(nama)
      $('#psb').text(reg)
    })
    $('#hapus').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var nama = button.data('nama')
      var reg = button.data('reg')
      var id = button.data('id')
      var page = button.data('page')
      $('#id').val(id)
      $('#page_h').val(page)
      $('#nama_h').text(nama)
      $('#psb_h').text(reg)
    })
  });
</script>
@endsection
