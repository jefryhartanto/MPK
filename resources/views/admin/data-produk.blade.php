@extends('admin.template.template')

@section('page-name','Data Produk')

@section('page-section','index')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Produk</h3>
            <br>
            <a style="margin-top: 20px;" href="#modal-tambah" role="btn btn-succes" data-toggle="modal" class="btn btn-success">Tambah Data </a>
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
                    <th>menu</th>
                </tr>
                </thead>
                <tbody>
                @foreach($model as $row)
                    <tr>
                        <td>{{$row['nama']}}</td>
                        <td>Rp. {{number_format($row['harga'])}}</td>
                        <td>{{$row['daerah']}}</td>
                        <td>{{$row['nama_cv']}}</td>
                        <td>{{$row['stock']}}</td>
                        <td>
                            <a data-id="{{ $row['id'] }}" href="#modal-edit" role="btn btn-success" data-toggle="modal" class="btn btn-success btn-edit">Edit</a>
                            <a href="{{URL("api/produk-delete/$row[id]")}}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-edit-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-detail-label">Edit Data Produk</h4>
                </div>
                <div class="modal-body">
                    <!-- Form Data -->
                    <div style="padding: 2%;">
                        <form method="post" action="{{ URL("api/produk-update") }}" id="form-tambah" role="form">
                            {{ csrf_field() }}
                            <input id="edit-id" type="hidden" name="id">
                            <div class="row">
                                <label>Nama</label>
                                <input id="edit-nama" type="text" name="nama" class="form-control">
                            </div>
                            <div class="row">
                                <div>
                                    <label>Harga</label>
                                    <input id="edit-harga" type="number" name="harga" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <label>Data CV</label>
                                <select id="edit-data-cv" name="data_cv_id" class="form-control">
                                    <option disabled>--Pilih CV--</option>
                                    @foreach($dataCV as $d)
                                        <option value="{{$d->id}}">{{$d->daerah}} - {{$d->nama_cv}}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-success">Perbaharui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="modal-tambah-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-detail-label">Tambah Data Produk</h4>
                </div>
                <div class="modal-body">
                    <!-- Form Data -->
                    <div style="padding: 2%;">
                        <form method="post" action="{{ URL("api/produk-create") }}" id="form-tambah" role="form">
                            {{ csrf_field() }}
                            <div class="row">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="row">
                            <div>
                                <label>Harga</label>
                                <input type="number" name="harga" class="form-control">
                            </div>
                            </div>
                            <div class="row">
                                <label>Data Produk</label>
                                <select name="data_cv_id" class="form-control">
                                    <option disabled>--Pilih CV--</option>
                                    @foreach($dataCV as $d)
                                        <option value="{{$d->id}}">{{$d->daerah}} - {{$d->nama_cv}}</option>
                                    @endforeach
                                </select>
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
    @include('admin.js.data-produk')
@endsection