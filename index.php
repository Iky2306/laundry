<!DOCTYPE html>
<html>
<head>
<title>Sistem Informasi Laundry</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<style>
    body {
        background-image: url("assets/img/bg-laundry.jpg");
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .panel {
        background-color: rgba(255, 255, 255, 0.2); /* Semi-transparent white */
    }
    .panel {
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        border-radius: 5px;
    }
    .form-control {
        margin-bottom: 10px;
    }
</style>
</head>
<body>
<div class="container">
    <div class="col-md-4 col-md-offset-4">
        <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<div class='alert alert-danger'>Login gagal! username dan password salah!</div>";
            } else if($_GET['pesan'] == "logout"){
                echo "<div class='alert alert-info'>Anda telah berhasil logout</div>";
            } else if($_GET['pesan'] == "belum_login"){
                echo "<div class='alert alert-danger'>Anda harus login untuk mengakses halaman admin</div>";
            }
        }
        ?>
        <form action="login.php" method="post">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" value="Log In">
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
