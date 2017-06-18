@extends('admin.template.template')

@section('page-name','Data Pegawai')

@section('page-section','index')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Pegawai</h3>
            <br>
            <a style="margin-top: 20px;" href="#modal-tambah" role="btn btn-succes" data-toggle="modal" class="btn btn-success">Tambah Data </a>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
            <table id="data" class="table table-bordered table-striped data-table">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    <th>Daerah</th>
                    <th>Nama CV</th>
                    <th>menu</th>

                </tr>
                </thead>
            <tbody>
                @foreach($model as $row)
                    <tr>
                        <td id="data-table-pegawai-nama">{{$row->nama}}</td>
                        <td id="data-table-pegawai-no-hp">{{$row->no_hp}}</td>
                        <td id="data-table-pegawai-alamat">{{$row->alamat}}</td>
                        <td id="data-table-pegawai-daerah">{{$row->daerah}}</td>
                        <td id="data-table-pegawai-nama-cv">{{$row->nama_cv}}</td>
                        <td>
                            <a data-id="{{ $row->id }}" href="#modal-detail" role="btn btn-succes" data-toggle="modal" class="btn btn-primary btn-detail">detail</a>
                            <a data-id="{{ $row->id }}" href="#modal-edit" role="btn btn-succes" data-toggle="modal" class="btn btn-success btn-edit">Edit</a>
                            <a href="{{ url("api/pegawai-delete/$row->id") }}" class="btn btn-danger">Hapus</a>
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
                    <h4 class="modal-title" id="modal-detail-label">Tambah Data Pegawai</h4>
                </div>
                <div class="modal-body">
                    <!-- Form Data -->
                    <div style="padding: 2%;">
                        <form id="form-tambah" method="post" action="{{ URL("api/pegawai-create") }}" role="form">
                            {{ csrf_field() }}
                            <div class="row">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="row">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control">
                            </div>
                            <div class="row">
                                <label>Kelamin</label><br>
                                <input type="radio" name="kelamin" value="Laki-laki"> Laki-laki <br>
                                <input type="radio" name="kelamin" value="Perempuan"> Perempuan
                            </div>
                            <div class="row">
                                <label>No. HP</label>
                                <input type="number" name="no_hp" class="form-control">
                            </div>
                            <div class="row">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                            <div class="row">
                                <label>Data CV</label>
                                <select name="data_cv_id" class="form-control">
                                    <option disabled>--Pilih CV--</option>
                                    @foreach($dataCV as $d)
                                        <option value="{{$d->id}}">{{$d->daerah}} - {{$d->nama_cv}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <label>No. Rekening</label>
                                <input type="number" name="no_rekening" class="form-control">
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button id="button-tambah-submit" type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--modal detail-->
    <div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="modal-detail-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-detail-label">Detail Pegawai</h4>
                </div>
                <div class="modal-body">
                    <!-- Form Data -->
                    <div style="padding: 2%;">
                        <div>
                            <div class="row">
                                <label>Nama</label>
                                <br><p id="detail-nama">-</p>
                            </div>
                            <div class="row">
                                <label>Tanggal Lahir</label>
                                <br><p id="detail-tanggal_lahir">-</p>
                            </div>
                            <div class="row">
                                <label>Kelamin</label>
                                <br><p id="detail-kelamin">-</p>
                            </div>
                            <div class="row">
                                <label>No. HP</label>
                                <br><p id="detail-no_hp">-</p>
                            </div>
                            <div class="row">
                                <label>Alamat</label>
                                <br><p id="detail-alamat">-</p>
                            </div>
                            <div class="row">
                                <label>Daerah </label>
                                <br><p id="detail-cv">-</p>
                            </div>
                            <div class="row">
                                <label>Nama CV</label>
                                <br><p id="detail-nama_cv">-</p>
                            </div>
                            <div class="row">
                                <label>No. Rekening</label>
                                <br><p id="detail-rekening">-</p>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        </div>

    <!--modal edit-->
    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-edit-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-edit-label">Edit Data Pegawai</h4>
                </div>
                <div class="modal-body">
                    <!-- Form Data -->
                    <div style="padding: 2%;">
                        <form id="form-edit" method="post" action="{{ URL("api/pegawai-update") }}" role="form">
                            {{ csrf_field() }}
                            <input id="edit-id" type="hidden" name="id">
                            <div class="row">
                                <label>Nama</label>
                                <input id="edit-nama" type="text" name="nama" class="form-control">
                            </div>
                            <div class="row">
                                <label>Tanggal Lahir</label>
                                <input id="edit-tanggal_lahir" type="date" name="tanggal_lahir" class="form-control">
                            </div>
                            <div class="row">
                                <label>Kelamin</label><br>
                                <input id="edit-kelamin-Laki-laki" type="radio" name="kelamin" value="Laki-laki"> Laki-laki <br>
                                <input id="edit-kelamin-Perempuan" type="radio" name="kelamin" value="Perempuan"> Perempuan
                            </div>
                            <div class="row">
                                <label>No. HP</label>
                                <input id="edit-no_hp" type="number" name="no_hp" class="form-control">
                            </div>
                            <div class="row">
                                <label>Alamat</label>
                                <input id="edit-alamat" type="text" name="alamat" class="form-control">
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
                            <div class="row">
                                <label>No. Rekening</label>
                                <input id="edit-no-rekening" type="number" name="no_rekening" class="form-control">
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button id="button-tambah-submit" type="submit" class="btn btn-success">Perbaharui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('pageScript')
    @include('admin.js.data-pegawai')
@endsection