<div class="box">
    <div class="box-header">
        <h3 class="box-title" align="center">Data penjualan</h3>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
        <table id="data" border="solid" align="center">
            <thead>
            <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>jumlah pesanan</th>
                <th>Total Harga</th>
                <th>Customer</th>

            </tr>
            </thead>
            <tbody>
            @php($number = 0)
            @foreach($model as $row)
                @php($number++)
                <tr>
                    <td>{{ $number }}</td>
                    <td>{{$row->nama}}</td>
                    <td>{{$row->jumlah_pesanan}}</td>
                    <td>Rp. {{number_format($row->total)}}</td>
                    <td>{{$row->customer}}</td>
                </tr>
            @endforeach

            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>