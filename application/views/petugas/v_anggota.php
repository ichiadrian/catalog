
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Data Petugas</h4>
        </div>
        <div class="card-body">

            <a href="<?php echo site_url().'c_petugas/anggota_tambah' ?>" class='btn btn-sm btn-success pull-right'>
            <i class="fa fa-plus"></i> Anggota Baru</a>
            <br/><br/>
			
			<div class="table-responsive">
	            <table class="table table-striped table-hover table-bordered table-datatable">
	            	<thead>
		                <tr>
		                    <th width="1%">No</th>
		                    <th width="">Nama</th>
		                    <th width="">NIk</th>
		                    <th width="">Alamat</th>
		                    <th width="24%">Opsi</th>
		                </tr>
	            	</thead>
	            	<tbody>
	                <?php
	                    $no=1;
	                    foreach ($anggota as $dp){
	                ?>
	                <tr>
	                    <td><?php echo $no++; ?></td>
	                    <td><?php echo $dp->nama; ?></td>
	                    <td><?php echo $dp->nik; ?></td>
	                    <td><?php echo $dp->alamat; ?></td>
	                    <td>
	                    	<a target="_blank" href="<?php echo site_url().'c_petugas/anggota_kartu/'.$dp->id; ?>" class="btn btn-sm btn-primary">
	                    		<i class="fa fa-adress-card"></i>Cetak Kartu</a>
	                        <a href="<?php echo site_url().'c_petugas/anggota_edit/'.$dp->id; ?>" class="btn btn-sm btn-warning">
	                            <i class="fa fa-wrench"></i>Edit</a>
	                        <a href="<?php echo site_url().'c_petugas/anggota_hapus/'.$dp->id; ?>" class="btn btn-sm btn-danger">
	                            <i class="fa fa-trash"></i>Hapus</a>
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