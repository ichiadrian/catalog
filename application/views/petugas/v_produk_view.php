<?php $data_catalog = $data_catalog[0]; ?>
<div class="container-fluid">

    <div class="row mx-5">
        <div class="col-4">
            <img class="shadow" width="377px" height="292px" src="<?php echo site_url()."gambar/produk_catalog/".$data_catalog->gambar1; ?>" alt="">
        </div>
        <div class="shadow card col-7 p-3 ml-5">
            <div class="row">
                <h3 class="col"><?php echo strtoupper($data_catalog->nama_barang); ?> </h3>
                <div class="col d-flex justify-content-end">
                    <a href="<?php echo site_url().'c_petugas/produk' ?>" class=" btn btn-light btn-outline-dark pull-right">
                        <i class="fa fa-arrow-left"></i>
                        Kembali
                    </a>
                </div>
            </div>
            <hr>
            <h5> <b>Deskripsi</b> </h5>
            <p class="ml-3"><?php echo $data_catalog->deskripsi; ?></p>

            <table width="25%" style="font-weight: bold">

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