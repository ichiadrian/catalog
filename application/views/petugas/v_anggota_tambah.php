<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Tambah Anggota Baru</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url().'c_petugas/anggota' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
            <br />
            <br />

            
            <form method="post" action="<?php echo base_url().'c_petugas/anggota_tambah_aksi'; ?>">
                <div class="form-group">
                    <label class="font-weight-bold" for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap" required="required">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="nik">nik</label>
                    <input type="number" class="form-control" name="nik" placeholder="Masukkan nik" required="required">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" required="required"
                        placeholder="Masukkan alamat"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>
        </div>
    </div>
</div>