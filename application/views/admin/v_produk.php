<div class="container-fluid mb-5">

    <div class="row mb-3">
        <div class="col d-flex justify-content-end">
            <a class="btn btn-success" href="<?php echo base_url().'c_admin/produk_baru'; ?>"> <i class="fa fa-plus"></i> Tambah Produk</a>
        </div>
    </div>

    <table class="table table-striped table-datatable">
        <thead class="thead-dark">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama Barang</th>
                <th class="text-center">Panjang</th>
                <th class="text-center">Lebar</th>
                <th class="text-center">Diameter</th>
                <th class="text-center">Berat</th>
                <th class="text-center">Tanggal Input</th>
                <th class="text-center">Tanggal Edit</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
                if (empty($catalog)){
                ?>
                    <tr>
                        <td colspan="8" class="text-center"> <h3> <strong>Tidak ada produk</strong> </h3> </td>
                    </tr>
            <?php
                } else foreach ($catalog as $index=>$cat) {
                    
            ?>
            <tr>
                <td class="text-center"><?php echo $index+1; ?></td>
                <td class="text-center"><?php echo $cat->nama_barang ?></td>
                <td class="text-center"><?php echo $cat->panjang.' '.PANJANG; ?></td>
                <td class="text-center"><?php echo $cat->lebar.' '.PANJANG; ?> </td>
                <td class="text-center"><?php echo $cat->tebal.' '.PANJANG; ?> </td>
                <td class="text-center"><?php echo $cat->berat.' '.BERAT; ?></td>
                <td class="text-center"><?php echo date('d M Y', strtotime($cat->tanggal_input)); ?></td>
                <td class="text-center"><?php echo date('d M Y', strtotime($cat->tanggal_edit)); ?></td>
                <td class="text-center"> 
                    <a class="btn btn-info" href="<?php echo base_url().'c_admin/produk_view/'.$cat->id; ?>">
                        <i class="fa fa-eye"></i>
                        Show
                    </a> 
                    <a class="btn btn-warning" href="<?php echo base_url().'c_admin/produk_edit/'.$cat->id; ?>">
                        <i class="fa fa-wrench"></i>
                        Edit
                    </a> 
                    <a class="btn btn-danger" href="<?php echo base_url().'c_admin/produk_hapus/'.$cat->id; ?>">
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