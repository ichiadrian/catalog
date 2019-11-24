<div class="container-fluid mb-3">
    <div class="jumbotron text-center">
        <div class="col-sm-8 mx-auto">
            <h1>Selamat datang!</h1>
            <p>Ini merupakan sistem informasi internal Catalog PT. Antam </p>
                <!-- <b>ebook tutorial codeigniter lengkap dengan studi kasus membuat sistem informasi
                    perpustakaan</b>.</p> -->
            <p>Anda telah login sebagai <b><?php echo $this->session->userdata('username'); ?></b> [admin].</p>
        </div>
    </div>
    <!-- <div class="card">
        <div class="card-header">Dashboard</div>
        <div class="card-body">Halo</div>
    </div> -->
    <div class="row d-flex justify-content-center">
        <!-- <div class="col-3 d-flex justify-content-center"> -->

        <?php
            foreach ($catalog as $key => $val) {
                    
        ?>
            <a class="card col-2 m-2" style="text-decoration: none;" href="<?php echo site_url()."c_petugas/produk_view/".$val->id; ?>">
                <div class="card-body">
                    <img class="d-flex justify-content-center" width="150px" height="100px" src="../gambar/produk_catalog/<?php echo $val->gambar; ?>" alt="">
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
