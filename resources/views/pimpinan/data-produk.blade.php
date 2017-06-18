@extends('pimpinan.template.template')

@section('page-name','Data Produk')

@section('page-section','index')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Produk</h3>
            <br>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
            <table id="data" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Harga/pcs</th>
                    <th>Daerah</th>
                    <th>Home Industry</th>
                    <th>Jumlah Stok</th>
                </tr>
                </thead>
                <tbody>
                @foreach($model as $row)
                    <tr>
                        <td>{{$row->nama}}</td>
                        <td>Rp. {{number_format($row->harga)}}</td>
                        <td>{{$row->daerah}}</td>
                        <td>{{$row->nama_cv}}</td>
                        <td>{{$row->stock}}</td>
                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection

@section('pageScript')
    @include('pimpinan.js.data-produk')
@endsection