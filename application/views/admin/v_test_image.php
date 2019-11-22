<div class="container">

    <form action="<?php echo site_url() . 'c_admin/aksi_upload' ?>" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label class="font-weight-bold" for="gambar">Gambar</label>
            <input type="file" class="form-control " accept="image/*" name="gambar" required="required">
        </div>
        <input type="submit" class="btn btn-primary" value="Simpan">

    </form>

</div>