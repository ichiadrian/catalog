<div class="container mb-5">

    <div class="row mb-5">
        <div class="col mb-5">
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

                    <form action="<?php echo site_url() . 'c_admin/produk_tambah_aksi' ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="font-weight-bold" for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukan Nama Barang" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="deskripsi">Deskripsi</label>
                            <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan Deskripsi Barang" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="panjang">Panjang</label>
                            <input type="number" class="form-control" step=".01" id="panjang" name="panjang" placeholder="Masukan Panjang (<?php echo PANJANG; ?>)" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="lebar">Lebar</label>
                            <input type="number" class="form-control" step=".01" id="lebar" name="lebar" placeholder="Masukan Lebar (<?php echo PANJANG; ?>)" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="tebal">Tebal</label>
                            <input type="number" class="form-control" step=".01" id="tebal" name="tebal" placeholder="Masukan Tebal (<?php echo PANJANG; ?>)" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="diameter">Diameter</label>
                            <input type="number" class="form-control" step=".01"  id="diameter" name="diameter" placeholder="Masukan Diameter (<?php echo PANJANG; ?>)" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="berat">Berat</label>
                            <input type="number" class="form-control" step=".01" id="berat" name="berat" placeholder="Masukan Berat (<?php echo BERAT; ?>)" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="tonase">Tonase</label>
                            <input type="number" class="form-control" step=".01" id="tonase" name="tonase" placeholder="Masukan Tonase" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="kadar">Kadar</label>
                            <input type="number" class="form-control" step=".01" id="kadar" name="kadar" placeholder="Masukan Kadar Karat" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="gambar1">Gambar 1</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" accept="image/*" id="gambar1" name="gambar1" required="required">
                                <label class="custom-file-label" id="labelgambar1" for="gambar1">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="gambar2">Gambar 2</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" accept="image/*" id="gambar2" name="gambar2" required="required">
                                <label class="custom-file-label" id="labelgambar2" for="gambar2">Choose file</label>
                            </div>
                        </div>
                        <img id="showimage1" src="#" hidden style="max-width: 300px; max-height: 300px;" />
                        <img id="showimage2" src="#" hidden style="max-width: 300px; max-height: 300px;" />
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