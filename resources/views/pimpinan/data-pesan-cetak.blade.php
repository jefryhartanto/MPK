<div class="box">
    <div class="box-header">
        <h3 class="box-title" align="center">Data Pesanan</h3>
    </div>

    <!-- /.box-header -->
    <div class="box-body" align="center">
        <table border="solid">
            <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>jumlah pesanan</th>
                <th>Home Indusrty</th>

            </tr>
            </thead>
            <tbody>
            @php($number = 0)
            @foreach($model as $row)
                @php($number++)
                <tr>
                    <td>{{$number}}</td>
                    <td>{{$row->nama}}</td>
                    <td>{{$row->jumlah_pesan}}</td>
                    <td>{{$row->nama_cv}}</td>
                </tr>
            @endforeach

            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
<script>
    print();
</script>