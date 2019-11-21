<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Proses Transaksi Peminjaman Buku</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url().'c_petugas/peminjaman' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
            <br />
            <br />
            <form method="post" action="<?php echo base_url().'c_petugas/peminjaman_aksi'; ?>">
                <div class="form-group">
                    <label class="font-weight-bold" for="buku">Buku</label>
                    <select name="buku" class="form-control">
                        <option value="">- Pilih buku</option>
                        <!-- untuk mendapatkan data judul buku -->
                        <?php foreach($data_buku as $b){ ?>
                            <option value="<?php echo $b->id; ?>"><?php echo $b->judul.' || '.$b->tahun. ' || ' .$b->penulis; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="anggota">Anggota</label>
                    <select name="anggota" class="form-control">
                        <option value="">- Pilih anggota</option>
                        <!-- untuk mendapatkan daftar anggota peminjam -->
                        <?php foreach($data_anggota as $a){ ?>
                            <option value="<?php echo $a->id; ?>"><?php echo "Nama : ". $a->nama.' | NIK : ' .$a->nik; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="tanggal_mulai">Tanggal Mulai
                        Pinjam</label>
                    <input type="date" class="form-control" name="tanggal_mulai"
                        placeholder="Masukkan tanggal mulai pinjam">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="tanggal_sampai">Tanggal Pinjam
                        Sampai</label>
                    <input type="date" class="form-control" name="tanggal_sampai"
                        placeholder="Masukkan tanggal pinjam sampai">
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>
        </div>
    </div>
</div>