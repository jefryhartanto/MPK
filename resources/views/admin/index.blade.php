@extends('admin.template.template')

@section('page-name','main')

@section('page-section','index')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>Data Pegawai</h3>

                    <br><br/>
                </div>
                <div class="icon">
                    <i class="fa fa-user-circle"></i>
                </div>
                <a href="{{ url("admin/data-pegawai") }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>Data Produk</h3>

                    <br><br/>
                </div>
                <div class="icon">
                    <i class="fa fa-product-hunt"></i>
                </div>
                <a href="{{ url("admin/data-produk") }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>Data Pemesanan</h3>

                    <br><br/>
                </div>
                <div class="icon">
                    <i class="fa fa-shopping-bag"></i>
                </div>
                <a href="{{ url("admin/data-pemesanan") }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>Data Penjualan</h3>

                    <br><br/>
                </div>
                <div class="icon">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="{{ url("admin/data-penjualan") }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    @endsection