<style>
#demo {
    margin-top: -48px;
    margin-left: -15px;
    margin-right: -15px;
}
</style>

<div class="container-fluid mb-5">
    <div id="demo" class=" carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ol>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo site_url().'gambar/7a.jpg'?>" alt="Los Angeles" width="100%" height="500px">
                <div class="carousel-caption">
                    <h1>Selamat datang!</h1>
                    <p>Ini merupakan sistem informasi internal Catalog PT. Antam </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo site_url().'gambar/2.jpg'?>" alt="Chicago" width="100%" height="500px">
                <div class="carousel-caption">
                    <h1>Selamat datang!</h1>
                    <p>Ini merupakan sistem informasi internal Catalog PT. Antam </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo site_url().'gambar/3.jpg'?>" alt="New York" width="100%" height="500px">
                <div class="carousel-caption">
                    <h1>Selamat datang!</h1>
                    <p>Ini merupakan sistem informasi internal Catalog PT. Antam </p>
                    <!-- <p>Anda telah login sebagai <b><?php echo $this->session->userdata('username'); ?></b> [admin].</p> -->
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>

<div class="row d-flex justify-content-center mb-5">
    <!-- <div class="col-3 d-flex justify-content-center"> -->

    <?php
            foreach ($catalog as $key => $val) {
                    
        ?>
    <a class="card col-2 m-2 mb-3" style="text-decoration: none;"
        href="<?php echo site_url()."c_petugas/produk_view/".$val->id; ?>">
        <div class="card-body">
            <div class="d-flex justify-content-center">
                <img width="150px" height="100px" src="../gambar/produk_catalog/<?php echo $val->gambar1; ?>" alt="">
            </div>
            <hr>
            <h5 class="text-center text-truncate"><?php echo $val->nama_barang; ?></h5>
        </div>
    </a>
    <?php 
            }
        ?>
    <!-- </div> -->
</div>




</div>