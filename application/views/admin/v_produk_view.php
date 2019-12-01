<?php $data_catalog = $data_catalog[0]; ?>
<div class="container-fluid mb-5">

    <div class="row mx-5">
        <div class="col-4 d-flex justify-content-center">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <?php if ($data_catalog->gambar2 != null) echo '<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>'; ?>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img width="377px" height="292px" class="d-block w-100" src="<?php echo site_url() . "gambar/produk_catalog/" . $data_catalog->gambar1; ?>" alt="First slide">
                    </div>
                    <?php if ($data_catalog->gambar2 != null) { ?>
                        <div class="carousel-item">
                            <img width="377px" height="292px" class="d-block w-100" src="<?php echo site_url() . "gambar/produk_catalog/" . $data_catalog->gambar2; ?>" alt="Second slide">
                        </div>
                    <?php } ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!-- <img class="shadow" width="377px" height="292px" src="<?php echo site_url() . "gambar/produk_catalog/" . $data_catalog->gambar1; ?>" alt=""> -->
        </div>
        <div class="shadow card col-7 p-3 ml-5">
            <div class="row">
                <h3 class="col"><?php echo strtoupper($data_catalog->nama_barang); ?> </h3>
                <div class="col d-flex justify-content-end">
                    <a href="<?php echo site_url() . 'c_admin/produk' ?>" class=" btn btn-light btn-outline-dark pull-right">
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
                    <td>Panjang</td>
                    <td>:</td>
                    <td><?php echo number_format($data_catalog->panjang, 2) . ' ' . PANJANG; ?></td>
                </tr>
                <tr>
                    <td>Lebar</td>
                    <td>:</td>
                    <td><?php echo number_format ($data_catalog->lebar, 2) . ' ' . PANJANG; ?></td>
                </tr>
                <tr>
                    <td>Tebal</td>
                    <td>:</td>
                    <td><?php echo number_format ($data_catalog->tebal, 2) . ' ' . PANJANG; ?></td>
                </tr>
                <tr>
                    <td>Diameter</td>
                    <td>:</td>
                    <td><?php echo number_format($data_catalog->diameter, 2) . ' ' . PANJANG; ?></td>
                </tr>
                <tr>
                    <td>Berat</td>
                    <td>:</td>
                    <td><?php echo number_format($data_catalog->berat, 2) . ' ' . BERAT; ?></td>
                </tr>
                <tr>
                    <td>Tonase</td>
                    <td>:</td>
                    <td><?php echo $data_catalog->tonase; ?></td>
                </tr>
                <tr>
                    <td>Kadar</td>
                    <td>:</td>
                    <td><?php echo number_format($data_catalog->kadar, 2); ?> K</td>
                </tr>

            </table>

        </div>
    </div>

    <!-- <?php if ($data_catalog->gambar2 != null) { ?>
    <div class="row mx-5">
        <div class="col-4 d-flex justify-content-center">
            <img class="shadow" width="377px" height="292px" src="<?php echo site_url() . "gambar/produk_catalog/" . $data_catalog->gambar2; ?>" alt="">
        </div>
    </div>
    <?php } ?> -->

</div>

