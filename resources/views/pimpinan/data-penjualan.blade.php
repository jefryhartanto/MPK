@extends('pimpinan.template.template')

@section('page-name','Data Penjualan')

@section('page-section','index')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data penjualan</h3>
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

                </tr>
                </thead>
                <tbody>
                @foreach($model as $row)
                    <tr>
                        <td>{{$row->nama}}</td>
                        <td>{{$row->jumlah_pesanan}}</td>
                        <td>Rp. {{number_format($row->total)}}</td>
                        <td>{{$row->customer}}</td>
                    </tr>
                @endforeach

                </tbody>

            </table>
            <a class="btn btn-success" href="{{ url("pimpinan/data-penjualan-cetak") }}"> <i class="fa fa-print"></i> Cetak</a>
        </div>
        <!-- /.box-body -->
    </div>
@endsection
@section('pageScript')
    @include('pimpinan.js.data-penjualan')
@endsection