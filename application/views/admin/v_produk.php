<div class="container-fluid">

    <div class="row mb-3">
        <div class="col d-flex justify-content-end">
            <a class="btn btn-primary" href="<?php echo base_url().'c_admin/produk_baru'; ?>">Tambah Produk</a>
        </div>
    </div>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama Barang</th>
                <th class="text-center">Tinggi</th>
                <th class="text-center">Lebar</th>
                <th class="text-center">Berat</th>
                <th class="text-center">Tanggal</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
                foreach ($catalog as $cat) {
                    
                
            ?>
            <tr>
                <td class="text-center">1</td>
                <td class="text-center"><?php echo $cat->nama_barang ?></td>
                <td class="text-center"><?php echo $cat->tinggi.' '.PANJANG; ?></td>
                <td class="text-center"><?php echo $cat->lebar.' '.PANJANG; ?> </td>
                <td class="text-center"><?php echo $cat->berat.' '.BERAT; ?></td>
                <td class="text-center"><?php echo date('d M Y', strtotime($cat->tanggal_input)); ?></td>
                <td class="text-center"> 
                    <a class="btn btn-warning" href="<?php echo base_url().'c_admin/produk/produk_edit'; ?>">
                        <i class="fa fa-wrench"></i>
                        Edit
                    </a> 
                    <a class="btn btn-danger" href="<?php echo base_url().'c_admin/produk/produk_edit'; ?>">
                        <i class="fa fa-trash"></i>
                        Hapus
                    </a> 
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
        
    </table>

</div>