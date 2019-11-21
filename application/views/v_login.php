<!DOCTYPE html>
<html>

<head>
    <title>Login - Internal Catalog</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css' ?>">
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js' ?>"></script>
</head>

<body class="bg-dark">
    <div class="container">
        <br /><br /><br /><br />
        <!-- <h3 class="font-weight-normal text-center text-white">SISTEM INFORMASI</h3> -->
        <h2 class="font-weight-normal text-center text-white mb-5"><b>i- Catalog</b></h2>
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-body">
                    <!-- menampilkan pesan saat akan login di buat di  halaman yg akan di tampilkan saja -->
                    <?php 
                        if(isset($_GET['alert'])){
                            if($_GET['alert']=="gagal"){
                                echo "<div class='alert alert-danger font-weight-bold text-center'>Anda gagal login broo</div>";
                            }else if($_GET['alert']=="belum_login"){
                                echo "<div class='alert alert-danger font-weight-bold text-center'>Silahkan login terlebih dahulu</div>";
                            }else if($_GET['alert']=="logout"){
                                echo "<div class='alert alert-success font-weight-bold text-center'>Anda telah logout</div>";
                            }
                        }
                    ?>

                    <h4 class="font-weight-bold text-center mb-3 mt-3">LOGIN</h4>
                    <!-- validasi error -->
                    <?php echo validation_errors(); ?>
                    <form action="<?php echo base_url().'c_login/aksi_login'; ?>" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input name="username" type="text" class="form-control" placeholder="Masukkan username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" type="password" class="form-control" placeholder="Masukkan Password">
                        </div>
                        <div class="form-group">
                            <label for="sebagai">Login Sebagai :</label>
                            <select name="sebagai" class="form-control">
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>