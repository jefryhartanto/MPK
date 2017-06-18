@extends('pimpinan.template.template')

@section('page-name','Data Pemesanan')

@section('page-section','index')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Pesanan</h3>
            <br>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
            <table id="data" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>jumlah pesanan</th>
                    <th>Home Indusrty</th>

                </tr>
                </thead>
                <tbody>
                @foreach($model as $row)
                    <tr>
                        <td>{{$row->nama}}</td>
                        <td>{{$row->jumlah_pesan}}</td>
                        <td>{{$row->nama_cv}}</td>
                    </tr>
                @endforeach

                </tbody>

            </table>

            <a class="btn btn-success" href="{{ url("pimpinan/data-pemesanan-cetak") }}"><i class="fa fa-print"></i> Cetak</a>
        </div>
        <!-- /.box-body -->
    </div>
@endsection

@section('pageScript')
    @include('pimpinan.js.data-pesan')
    @endsection