
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Data Petugas</h4>
        </div>
        <div class="card-body">

            <br/><br/>
			
			<div class="table-responsive">
	            <table class="table table-striped table-hover table-bordered table-datatable">
	            	<thead>
		                <tr>
		                    <th width="1%">No</th>
		                    <th width="">Nama</th>
		                    <th width="">NIk</th>
		                    <th width="">Alamat</th>
		                    <th width="10%">Opsi</th>
		                </tr>
	            	</thead>
	            	<tbody>
	                <?php
	                    $no=1;
	                    foreach ($data_anggota as $dp){
	                ?>
	                <tr>
	                    <td><?php echo $no++; ?></td>
	                    <td><?php echo $dp->nama; ?></td>
	                    <td><?php echo $dp->nik; ?></td>
	                    <td><?php echo $dp->alamat; ?></td>
	                    <td>
	                    	<a target="_blank" href="<?php echo site_url().'c_admin/anggota_kartu/'.$dp->id; ?>" class="btn btn-sm btn-primary">
	                    		<i class="fa fa-adress-card"></i>Cetak Kartu</a>
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