@extends('admin.template.template')

@section('page-name','Data Pemesanan')

@section('page-section','index')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Pesanan</h3>
            <br>
            <a style="margin-top: 20px;"href="#modal-tambah" role="btn btn-succes" data-toggle="modal" class="btn btn-success">Tambah Data </a>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
            <table id="data" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>jumlah pesanan</th>
                    <th>Home Indusrty</th>
                    <th>menu</th>

                </tr>
                </thead>
                <tbody>
                @foreach($model as $row)
                    <tr>
                        <td>{{$row->nama}}</td>
                        <td>{{$row->jumlah_pesan}}</td>
                        <td>{{$row->nama_cv}}</td>
                        <td>
                            <a data-id="{{ $row->id }}" href="#modal-edit" role="btn btn-success" data-toggle="modal" class="btn btn-success btn-edit">Edit</a>
                            <a href="{{URL("api/pesan-delete/$row->id")}}" class="btn btn-danger">Hapus</a>
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
                    <h4 class="modal-title" id="modal-detail-label">Tambah Data Pemesanan</h4>
                </div>
                <div class="modal-body">
                    <!-- Form Data -->
                    <div style="padding: 2%;">
                        <form method="post" action="{{URL("api/pesan-create")}}" id="form-tambah" role="form">
                            {{csrf_field()}}
                            <div class="row">
                                <label>Jumlah pesan</label>
                                <input type="number" name="jumlah_pesan" class="form-control">
                            </div>
                                <div class="row">
                                    <label>Data Produk</label>
                                    <select name="produk_id" class="form-control data-produk">
                                        <option >--Pilih Produk--</option>
                                        @foreach($dataProduk as $d)
                                            <option data-cv="{{$d->data_cv_id}}" value="{{$d->id}}">{{$d->nama}} - {{$d->harga}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            <div class="row">
                                <label>Data cv</label>
                                <select disabled name="data_cv_id" class="form-control data-cv">
                                    <option >--Pilih CV--</option>
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

    <!-- Modal Edit -->
    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-edit-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-detail-label">Edit Data Pemesanan</h4>
                </div>
                <div class="modal-body">
                    <!-- Form Data -->
                    <div style="padding: 2%;">
                        <form method="post" action="{{URL("api/pesan-update")}}" id="form-tambah" role="form">
                            <input type="hidden" name="id" id="edit-id">
                            {{csrf_field()}}
                            <div class="row">
                                <label>Jumlah pesan</label>
                                <input id="edit-jumlah" type="number" name="jumlah_pesan" class="form-control">
                            </div>
                            <div class="row">
                                <label>Data Produk</label>
                                <select  id="edit-data-produk" class="form-control data-produk">
                                    <option >--Pilih Produk--</option>
                                    @foreach($dataProduk as $d)
                                        <option data-cv="{{$d->data_cv_id}}" value="{{$d->id}}">{{$d->nama}} - {{$d->harga}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <label>Data cv</label>
                                <select disabled name="data_cv_id" class="form-control data-cv">
                                    <option >--Pilih CV--</option>
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
    <script type="text/javascript">
        $(".data-produk").on("change", function (o) {
            var dataCv = $('option:selected', this).attr('data-cv');
            $(".data-cv").val(dataCv);
        });
    </script>
    @include('admin.js.data-pesan')
    @endsection