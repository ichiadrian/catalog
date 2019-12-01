<?php $data_catalog = $data_catalog[0]; ?>
<div class="container mb-5">

    <div class="row mb-5">
        <div class="col mb-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Edit Produk</h4>
                </div>
                <div class="card-body">

                    <a href="<?php echo site_url() . 'c_petugas/produk' ?>" class=" btn btn-light btn-outline-dark pull-right">
                        <i class="fa fa-arrow-left"></i>
                        Kembali
                    </a>

                    <br /><br />

                    <form action="<?php echo site_url() . 'c_petugas/produk_update' ?>" method="post" enctype="multipart/form-data">
                        <input type="text" hidden name="id" value="<?php echo $data_catalog->id; ?>">
                        <div class="form-group">
                            <label class="font-weight-bold" for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukan Nama Barang" value="<?php echo $data_catalog->nama_barang; ?>" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="deskripsi">Deskripsi</label>
                            <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan Deskripsi Barang" required="required"><?php echo $data_catalog->deskripsi; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="panjang">Panjang</label>
                            <input type="number" class="form-control" step=".01" id="panjang" name="panjang" placeholder="Masukan Panjang (<?php echo PANJANG; ?>)" value="<?php echo number_format($data_catalog->panjang, 2); ?>" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="lebar">Lebar</label>
                            <input type="number" class="form-control" step=".01" id="lebar" name="lebar" placeholder="Masukan Lebar (<?php echo PANJANG; ?>)" value="<?php echo number_format($data_catalog->lebar, 2); ?>" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="tebal">Tebal</label>
                            <input type="number" class="form-control" step=".01" id="tebal" name="tebal" placeholder="Masukan Tebal (<?php echo PANJANG; ?>)" value="<?php echo number_format($data_catalog->tebal, 2); ?>" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="diameter">Diameter</label>
                            <input type="number" class="form-control" step=".01" id="diameter" name="diameter" placeholder="Masukan Diameter (<?php echo PANJANG; ?>)" value="<?php echo number_format($data_catalog->diameter, 2); ?>" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="berat">Berat</label>
                            <input type="number" class="form-control" step=".01" id="berat" name="berat" placeholder="Masukan Berat (<?php echo BERAT; ?>)" value="<?php echo number_format($data_catalog->berat, 2); ?>" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="tonase">Tonase</label>
                            <input type="number" class="form-control" id="tonase" name="tonase" placeholder="Masukan Tonase" value="<?php echo $data_catalog->tonase; ?>" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="kadar">Kadar</label>
                            <input type="number" class="form-control" id="kadar" name="kadar" step=".01" placeholder="Masukan Kadar" value="<?php echo number_format($data_catalog->kadar, 2); ?>" required="required">
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