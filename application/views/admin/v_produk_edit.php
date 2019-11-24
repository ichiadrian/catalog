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
                        <input type="text" hidden name="id" value="<?php echo $data_catalog->id; ?>">
                        <div class="form-group">
                            <label class="font-weight-bold" for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" placeholder="Masukan Nama Barang" value="<?php echo $data_catalog->nama_barang; ?>" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="deskripsi">Deskripsi</label>
                            <textarea type="text" class="form-control" name="deskripsi" placeholder="Masukan Deskripsi Barang" required="required"><?php echo $data_catalog->deskripsi; ?></textarea>
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
                            <label class="font-weight-bold" for="gambar1">Gambar 1</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" accept="image/*" id="gambar1" name="gambar1" value="">
                                <label class="custom-file-label" id="labelgambar1" for="gambar1"> <?php if($data_catalog->gambar1 != null) echo $data_catalog->gambar1; else echo "Choose file";  ?> </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="gambar2">Gambar 2</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" accept="image/*" id="gambar2" name="gambar2" value="">
                                <label class="custom-file-label" id="labelgambar2" for="gambar2"><?php if($data_catalog->gambar2 != null) echo $data_catalog->gambar2; else echo "Choose file";  ?></label>
                            </div>
                        </div>
                        <img id="showimage1" src="<?php echo site_url() . 'gambar/produk_catalog/' . $data_catalog->gambar1; ?>" style="max-width: 300px; max-height: 300px;" />
                        <img id="showimage2" src="<?php echo site_url() . 'gambar/produk_catalog/' . $data_catalog->gambar2; ?>" style="max-width: 300px; max-height: 300px;" />
                        <input type="text" name="gambarlama1" hidden value="<?php echo $data_catalog->gambar1; ?>" <?php if ($data_catalog->gambar1 == null || $data_catalog->gambar1 == "") echo "hidden";  ?>>
                        <input type="text" name="gambarlama2" hidden value="<?php echo $data_catalog->gambar2; ?>" <?php if ($data_catalog->gambar2 == null || $data_catalog->gambar2 == "") echo "hidden";  ?>>
                        <br>
                        <br>
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

<script>
    function readURL(input, ids, labelid) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $('#' + ids).attr('src', e.target.result);
                $('#'+ labelid).html(input.files && input.files.length ? input.files[0].name : '');
                $('#' + ids).removeAttr('hidden');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#gambar1").change(function() {
        readURL(this, 'showimage1', 'labelgambar1');
    });

    $("#gambar2").change(function() {
        readURL(this, 'showimage2', 'labelgambar2');
    });
</script>