<script>
    $(".btn-edit").on("click", function (f) {
        var current = $(f.currentTarget);
        var id = current.data("id");

        $data = $.ajax({
            url:"{{ url("api/produk-detail") }}"+"/"+id,
            dataType:"json"
        });

        $data.success(function (f) {
            $("#edit-id").val(f.id);
            $("#edit-nama").val(f.nama);
            $("#edit-harga").val(f.harga);
            $("#edit-data-cv").val(f.data_cv_id);


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