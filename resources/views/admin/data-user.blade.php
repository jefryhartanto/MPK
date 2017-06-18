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
                    <th>E-Mail</th>
                    <th>Username</th>
                    <th>Peran</th>
                    <th>menu</th>

                </tr>
                </thead>
            <tbody>
                @foreach($model as $row)
                    <tr>
                        <td id="data-table-pegawai-no-hp">{{$row->name}}</td>
                        <td id="data-table-pegawai-alamat">{{$row->email}}</td>
                        <td id="data-table-pegawai-daerah">{{$row->username}}</td>
                        <td id="data-table-pegawai-nama-cv">{{$row->role}}</td>
                        <td>
                            <a data-id="{{ $row->id }}" href="#modal-edit" role="btn btn-succes" data-toggle="modal" class="btn btn-success btn-edit">Edit</a>
                            @if($row->id != 1)
                            <a href="{{ url("api/user-delete/$row->id") }}" class="btn btn-danger">Hapus</a>
                                @endif
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
                    <form id="form-tambah" method="post" action="{{ URL("api/user-create") }}" role="form">
                    <div style="padding: 2%;">
                            {{ csrf_field() }}
                            <div class="row">
                                <label>Nama</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="row">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="row">
                                <label>Username</label><br>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="row">
                                <label>Role</label><br>
                                <input type="radio" name="role" value="0"> Admin <br>
                                <input type="radio" name="role" value="1"> Pimpinan <br>
                            </div>
                            <div class="row">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" autocomplete="off">
                            </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button id="button-tambah-submit" type="submit" class="btn btn-success">Simpan</button>
                </div>
                </form>
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
                    <form id="form-tambah" method="post" action="{{ URL("api/user-create") }}" role="form">
                        <div style="padding: 2%;">
                            {{ csrf_field() }}
                            <div class="row">
                                <label>Nama</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="row">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="row">
                                <label>Username</label><br>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="row">
                                <label>Role</label><br>
                                <input type="radio" name="role" value="0"> Admin <br>
                                <input type="radio" name="role" value="1"> Pimpinan <br>
                            </div>
                            <div class="row">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            <button id="button-tambah-submit" type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('pageScript')
    @include('admin.js.data-user')
@endsection