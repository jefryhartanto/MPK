<script>
    $(".btn-detail").on("click", function (f) {
        var current = $(f.currentTarget);
        var id = current.data("id");

        $data = $.ajax({
            url:"{{ url("api/user-detail") }}"+"/"+id,
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
            url:"{{ url("api/user-detail") }}"+"/"+id,
            dataType:"json"
        });

        $data.success(function (f) {
            $("#edit-id").val(f.id);
            $("#edit-nama").val(f.nama);
            $("#edit-tanggal_lahir").val(f.tanggal_lahir);
            $("#edit-kelamin-"+f.kelamin).prop("checked",true);
            $("#edit-no_hp").val(f.no_hp);
            $("#edit-alamat").val(f.alamat);
            $("#edit-cv").val(f.daerah);
            $("#edit-data-cv").val(f.data_cv_id);
            $("#edit-no-rekening").val(f.no_rekening);


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