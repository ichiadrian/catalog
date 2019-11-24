<div class="container">
    <!-- <div class="col-md-6 offset-3" > -->
    <div class="shadow card">
        <div class="card-header text-center">
            <h4>Tambah Petugas Baru</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo site_url().'c_admin/petugas' ?>" class=" btn btn-light btn-outline-dark pull-right">
            <i class="fa fa-arrow-left"></i>Kembali</a>
            <br/><br/>

            <form action="<?php echo site_url().'c_admin/petugas_tambah_aksi' ?>" method="post">
                <div class="form-group">
                    <label class="font-weight-bold" for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukan nama lengkap anda" required="required">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="username">User Name</label>
                    <input type="text" class="form-control " name="username" placeholder="Masukan username" required="required">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukan password" required="required">
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>

        </div>
    </div>
    <!-- </div> -->
</div>