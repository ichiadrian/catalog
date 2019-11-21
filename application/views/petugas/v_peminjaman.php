<div class="container-fluid">
    <div class="card">
        <div class="card-header text-center">
            <h4>Data Peminjaman Buku</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url().'c_petugas/peminjaman_tambah' ?>" class='btn btnsm btn-success pull-right'><i class="fa fa-plus"></i> Peminjaman Baru</a>
            <br />
            <br />
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-datatable">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Buku</th>
                            <th>Peminjam</th>
                            <th>Mulai Pinjam</th>
                            <th>Pinjam Sampai</th>
                            <th>Status</th>
                            <th width="16%">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach($data_peminjaman as $p){
                            ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $p->judul; ?></td>
                            <td><?php echo $p->nama; ?></td>
                            <td><?php echo date('d-m-Y',strtotime($p->peminjaman_tanggal_mulai)); ?></td>
                            <td><?php echo date('d-m-Y',strtotime($p->peminjaman_tanggal_sampai)); ?></td>
                            <td>
                                <!-- untuk menentukan apakah buku di pinjam atau tdk -->
                                <?php
                                if($p->peminjaman_status == "1"){
                                    echo "<div class='badge badge-success'>Selesai</div>";
                                }else if($p->peminjaman_status == "2"){
                                    echo "<div class='badge badge-warning'>Dipinjam</div>";
                                }
                                ?>
                            </td>
                            <td class="text-center">
                                <?php
                                if($p->peminjaman_status=='1'){
                                    echo "-";
                                }else if($p->peminjaman_status=='2'){
                                ?>
                                <a href="<?php echo base_url().'c_petugas/peminjaman_selesai/'.$p->peminjaman_id; ?>" class="btn btn-sm btn-warning">
                                    <i class="fa fa-refresh"></i>Selesai</a>
                                <a href="<?php echo base_url().'c_petugas/peminjaman_batalkan/'.$p->peminjaman_id; ?>" class="btn btn-sm btn-danger">
                                    <i class="fa fa-close"></i>Batalkan</a>
                                <?php
                                    }
                                ?>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>