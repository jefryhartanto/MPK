<script>
    $(".btn-edit").on("click", function (f) {
        var current = $(f.currentTarget);
        var id = current.data("id");

        $data = $.ajax({
            url:"{{ url("api/pesan-detail") }}"+"/"+id,
            dataType:"json"
        });

        $data.success(function (f) {
            $("#edit-id").val(f.id);
            $("#edit-jumlah").val(f.jumlah_pesan);
            $("#edit-data-produk").val(f.produk_id);


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