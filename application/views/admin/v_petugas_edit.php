<div class="container">
    <!-- <div class="col-md-6 offset-3" > -->
    <div class="shadow card">
        <div class="card-header text-center">
            <h4>Edit Petugas</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo site_url().'c_admin/petugas' ?>" class=" btn btn-light btn-outline-dark pull-right">
            <i class="fa fa-arrow-left"></i>Kembali</a>
            <br/><br/>

            <?php foreach($data_petugas as $p);{ ?>
            <form action="<?php echo site_url().'c_admin/petugas_update/' ?>" method="post">
                <div class="form-group">
                    <label class="font-weight-bold" for="nama">Nama Lengkap</label>
                    <input type="hidden" value="<?php echo $p->id ?>" name="id">
                    <input type="text" value="<?php echo $p->nama ?>"class="form-control" name="nama" placeholder="Masukan nama lengkap anda" required="required">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="username">User Name</label>
                    <input type="text" value="<?php echo $p->username ?>" class="form-control " name="username" placeholder="Masukan username" required="required">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="password">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Masukan password" >
                    <small class="form-text text-muted">*Kosongkan jika tidak ingin mengubah password.</small>
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>
            <?php }?>
        </div>
    </div>
    <!-- </div> -->
</div>