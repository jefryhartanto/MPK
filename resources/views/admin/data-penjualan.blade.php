@extends('admin.template.template')

@section('page-name','Data Penjualan')

@section('page-section','index')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data penjualan</h3>
            <br>
            <a style="margin-top: 20px;"href="#modal-tambah" role="btn btn-succes" data-toggle="modal" class="btn btn-success">Tambah Data </a>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
            <table id="data" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>jumlah pesanan</th>
                    <th>Total Harga</th>
                    <th>Customer</th>
                    <th>menu</th>

                </tr>
                </thead>
                <tbody>
                @foreach($model as $row)
                    <tr>
                        <td>{{$row->nama}}</td>
                        <td>{{$row->jumlah_pesanan}}</td>
                        <td>Rp. {{number_format($row->total)}}</td>
                        <td>{{$row->customer}}</td>
                        <td>
                            <a data-id="{{ $row->id }}" href="#modal-edit" role="btn btn-success" data-toggle="modal" class="btn btn-success btn-edit"">Edit</a>
                            <a href="{{ url("api/penjualan-delete/$row->id") }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="modal-tambah-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-detail-label">Tambah Data Penjualan</h4>
                </div>
                <div class="modal-body">
                    <!-- Form Data -->
                    <div style="padding: 2%;">
                        <form method="post" action="{{URL("api/penjualan-create")}}" id="form-tambah" role="form">
                            {{csrf_field()}}
                            <div class="row">
                                <label>Data Produk</label>
                                <select id="harga-produk-tambah" name="produk_id" class="form-control data-penjualan">
                                    <option >--Pilih Produk--</option>
                                    @foreach($dataProduk as $d)
                                        <option value="{{$d->id}}" data-harga="{{$d->harga}}">{{$d->nama}} - Rp. {{number_format($d->harga)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <label>Jumlah Pesanan</label>
                                <input type="number" id="input_jumlah_pesanan" name="jumlah_pesanan_id" class="form-control data-pemesanan" placeholder="Masukkan Jumlah Pesanan">
                            </div>
                            <div class="row">
                                <label>Total Harga</label>
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-danger btn-hitung">Hitung</button>
                                    </div>
                                    <!-- /btn-group -->
                                    <input disabled id="hasil-hitung" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <label>Customer</label>
                                <input type="text" name="customer" class="form-control">
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Edit -->
    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-edit-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-detail-label">Edit Data Penjualan</h4>
                </div>
                <div class="modal-body">
                    <!-- Form Data -->
                    <div style="padding: 2%;">
                        <form method="post" action="{{URL("api/penjualan-create")}}" id="form-tambah" role="form">
                            {{csrf_field()}}
                            <form method="post" action="{{ URL("api/penjualan-update") }}" id="form-tambah" role="form">
                            <div class="row">
                                <input type="hidden" name="edit-id">
                                <label>Data Produk</label>
                                <select id="harga-produk-edit" name="produk_id" class="form-control data-penjualan">
                                    <option >--Pilih Produk--</option>
                                    @foreach($dataProduk as $d)
                                        <option value="{{$d->id}}" data-harga="{{$d->harga}}">{{$d->nama}} - Rp. {{number_format($d->harga)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <label>Jumlah Pesanan</label>
                                <input type="number" id="input_jumlah_pesanan_edit" name="jumlah_pesanan_id" class="form-control data-pemesanan" >
                            </div>
                                <div class="row">
                                    <label>Total Harga</label>
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-danger btn-hitung-edit">Hitung</button>
                                        </div>
                                        <!-- /btn-group -->
                                        <input disabled id="hasil-hitung-edit" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                <label>Customer</label>
                                <input id="edit-customer" type="text" name="customer" class="form-control">
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('pageScript')
    @include('admin.js.data-penjualan')
@endsection