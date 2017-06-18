@extends('pimpinan.template.template')

@section('page-name','Data Pegawai')

@section('page-section','index')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Pegawai</h3>
            <br>
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
                        </td>
                    </tr>
                    @endforeach

            </tbody>

            </table>
        </div>
        <!-- /.box-body -->
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
                    <a id="cetak" href="" type="button" class="btn btn-success">Cetak</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        </div>

@endsection

@section('pageScript')
    @include('pimpinan.js.data-pegawai')
@endsection