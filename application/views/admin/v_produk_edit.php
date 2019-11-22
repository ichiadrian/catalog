<?php $data_catalog = $data_catalog[0]; ?>
<div class="container">

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Tambah Produk</h4>
                </div>
                <div class="card-body">

                    <a href="<?php echo site_url() . 'c_admin/produk' ?>" class=" btn btn-light btn-outline-dark pull-right">
                        <i class="fa fa-arrow-left"></i>
                        Kembali
                    </a>

                    <br /><br />

                    <form action="<?php echo site_url() . 'c_admin/produk_update' ?>" method="post" enctype="multipart/form-data">
                        <input type="text" hidden value="<?php echo $data_catalog->id; ?>">
                        <div class="form-group">
                            <label class="font-weight-bold" for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" placeholder="Masukan Nama Barang" value="<?php echo $data_catalog->nama_barang; ?>" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" placeholder="Masukan Deskripsi Barang" value="<?php echo $data_catalog->deskripsi; ?>" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="tinggi">Tinggi</label>
                            <input type="number" class="form-control" name="tinggi" placeholder="Masukan Tinggi" value="<?php echo $data_catalog->tinggi; ?>" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="lebar">Lebar</label>
                            <input type="number" class="form-control" name="lebar" placeholder="Masukan Lebar" value="<?php echo $data_catalog->lebar; ?>" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="tebal">Tebal</label>
                            <input type="number" class="form-control" name="tebal" placeholder="Masukan Tebal" value="<?php echo $data_catalog->tebal; ?>" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="berat">Berat</label>
                            <input type="number" class="form-control" name="berat" placeholder="Masukan Berat" value="<?php echo $data_catalog->berat; ?>" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="gambar">Gambar</label>
                            <input type="file" class="form-control " accept="image/*" id="gambar" name="gambar" value="<?php echo $data_catalog->gambar; ?>">
                        </div>
                        <img id="showimage" src="<?php echo site_url().'gambar/produk_catalog/'.$data_catalog->gambar; ?>"/>
                        <input type="text" name="gambarlama" hidden value="<?php echo $data_catalog->gambar; ?>">
                        <br>
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

<script>
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
</script>