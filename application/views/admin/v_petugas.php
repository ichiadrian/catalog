<div class="container">
    <div class="shadow card">
        <div class="card-header text-center">
            <h4>Data Petugas</h4>
        </div>
        <div class="card-body">

            <a href="<?php echo site_url().'c_admin/petugas_tambah' ?>" class='btn btn-sm btn-success pull-right'>
            <i class="fa fa-plus"></i> Petugas Baru</a>
            <br/><br/>

            <table class="table table-striped table-hover table-bordered table-datatable">
                <thead>
                    <tr>
                    <th width="1%">No</th>
                    <th width="">Nama</th>
                    <th width="">Username</th>
                    <th width="16%">Opsi</th>
                </tr>
            </thead>
                
                <?php
                    $no=1;
                    foreach ($data_petugas as $dp){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $dp->nama; ?></td>
                    <td><?php echo $dp->username; ?></td>
                    <td>
                        <a href="<?php echo site_url().'c_admin/petugas_edit/'.$dp->id; ?>" class="btn btn-sm btn-warning">
                            <i class="fa fa-wrench"></i>Edit</a>
                        <a href="<?php echo site_url().'c_admin/petugas_hapus/'.$dp->id; ?>" class="btn btn-sm btn-danger">
                            <i class="fa fa-trash"></i>Hapus</a>
                    </td>

                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</div>