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
            $("#cetak").attr("href","{{ url("pimpinan/data-pegawai-cetak") }}/"+f.id);


        });

        $data.fail(function (f) {
            alert("Failed");
        });
    });
</script>
<?php
/**
 * Created by PhpStorm.
 * User: Kazu-Kun
 * Date: 6/9/2017
 * Time: 4:03 PM
 */