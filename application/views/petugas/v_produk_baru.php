<div class="container">

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Tambah Produk</h4>
                </div>
                <div class="card-body">
                    <a href="<?php echo site_url() . 'c_petugas/produk' ?>" class=" btn btn-light btn-outline-dark pull-right">
                        <i class="fa fa-arrow-left"></i>
                        Kembali
                    </a>

                    <br /><br />

                    <form action="<?php echo site_url() . 'c_petugas/produk_tambah_aksi' ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="font-weight-bold" for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" placeholder="Masukan Nama Barang" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="deskripsi">Deskripsi</label>
                            <textarea type="text" class="form-control" name="deskripsi" placeholder="Masukan Deskripsi Barang" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="tinggi">Tinggi</label>
                            <input type="number" class="form-control" name="tinggi" placeholder="Masukan Tinggi" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="lebar">Lebar</label>
                            <input type="number" class="form-control" name="lebar" placeholder="Masukan Lebar" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="tebal">Tebal</label>
                            <input type="number" class="form-control" name="tebal" placeholder="Masukan Tebal" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="berat">Berat</label>
                            <input type="number" class="form-control" name="berat" placeholder="Masukan Berat" required="required">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="gambar">Gambar</label>
                            <input type="file" class="form-control " accept="image/*" id="gambar" name="gambar" required="required">
                        </div>
                        <img id="showimage" src="#" hidden/>
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