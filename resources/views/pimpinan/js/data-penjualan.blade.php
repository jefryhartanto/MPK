<script>
    $(".btn-detail").on("click", function (f) {
        var current = $(f.currentTarget);
        var id = current.data("id");

        $data = $.ajax({
            url:"{{ url("api/pegawai-detail") }}"+"/"+id,
            dataType:"json"
        });

        $data.success(function (f) {
            $("#detail-nama").text(f.nama);
            $("#detail-tanggal_lahir").text(f.tanggal_lahir);
            $("#detail-kelamin").text(f.kelamin);
            $("#detail-no_hp").text(f.no_hp);
            $("#detail-alamat").text(f.alamat);
            $("#detail-cv").text(f.daerah);
            $("#detail-nama_cv").text(f.nama_cv);
            $("#detail-rekening").text(f.no_rekening);


        });

        $data.fail(function (f) {
            alert("Failed");
        });
    });

    $(".btn-edit").on("click", function (f) {
        var current = $(f.currentTarget);
        var id = current.data("id");

        $data = $.ajax({
            url:"{{ url("api/penjualan-detail") }}"+"/"+id,
            dataType:"json"
        });

        $data.success(function (f) {
            $("#edit-id").val(f.id);
            $("#harga-produk-edit").val(f.produk_id);
            $("#input_jumlah_pesanan_edit").val(f.jumlah_pesanan);
            $("#edit-customer").val(f.customer);


        });

        $data.fail(function (f) {
            alert("Failed");
        });
    });

    $(".btn-hitung").on("click", function (f) {
        var harga = $("#harga-produk-tambah option:selected").attr("data-harga");
        var jumlah = $("#input_jumlah_pesanan").val();
        var total = harga*jumlah;
        $("#hasil-hitung").val("Rp. "+total.toLocaleString());
    });

    $(".btn-hitung-edit").on("click", function (f) {
        var harga = $("#harga-produk-edit option:selected").attr("data-harga");
        var jumlah = $("#input_jumlah_pesanan_edit").val();
        var total = harga*jumlah;
        $("#hasil-hitung-edit").val("Rp. "+total.toLocaleString());
    });
</script>
<?php
/**
 * Created by PhpStorm.
 * User: Kazu-Kun
 * Date: 6/9/2017
 * Time: 4:03 PM
 */