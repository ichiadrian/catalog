<?php $data_catalog = $data_catalog[0]; ?>
<div class="container-fluid">

    <div class="row mx-5">
        <div class="col-1"></div>
        <div class="col-4">
            <img class="img-thumbnail" src="<?php echo site_url()."gambar/produk_catalog/".$data_catalog->gambar; ?>" alt="">
        </div>
        <div class="card col-6 p-3">
            <h3 class="mb-0"><?php echo strtoupper($data_catalog->nama_barang); ?></h3>
            <hr>
            <h5> <b>Deskripsi</b> </h5>
            <p class="ml-3"><?php echo $data_catalog->deskripsi; ?></p>

            <table width="20%">

                <tr>
                    <td>Tinggi</td>
                    <td>:</td>
                    <td><?php echo $data_catalog->tinggi.' '.PANJANG; ?></td>
                </tr>
                <tr>
                    <td>Lebar</td>
                    <td>:</td>
                    <td><?php echo $data_catalog->lebar.' '.PANJANG; ?></td>
                </tr>
                <tr>
                    <td>Tebal</td>
                    <td>:</td>
                    <td><?php echo $data_catalog->tebal.' '.PANJANG; ?></td>
                </tr>
                <tr>
                    <td>Berat</td>
                    <td>:</td>
                    <td><?php echo $data_catalog->berat.' '.BERAT; ?></td>
                </tr>
                
            </table>

        </div>
        <div class="col-1"></div>
    </div>

</div>

<!-- <script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#showimage').attr('src', e.target.result);
                $('#showimage').removeAttr('hidden');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#gambar").change(function() {
        readURL(this);
    });
</script> -->