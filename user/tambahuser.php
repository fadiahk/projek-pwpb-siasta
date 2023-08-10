<?php

include 'assets/inc/koneksi.php';

if (isset($_POST['tambah_user'])) {

    $id = "";
    $nama = $_POST['username'];
    $pass = $_POST['password'];
    $name = $_POST['nama_lengkap'];
    $user = $_POST['level'];
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];

    $rand = rand();
    if ($ukuran < 1044070) {
        session_start();
        $filenm = $rand . '_' . $filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'uploadsuser/' . $filenm);
        mysqli_query($koneksi, "INSERT INTO user VALUES('$id','$filenm','$nama','$pass','$name', '$user')");
        header("location:index.php?page=users");
    } else {
?>
        <script>
            alert("Ukuran Gambar Terlalu Besar");
        </script>
<?php
    }
}

?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">User</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Di Sini</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="tambahuser.php" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="foto" id="foto" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" cols="30" rows="8"></input>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Level</label>
                    <select name="level" id="level" class="form-control">
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary" name="tambah_user" id="tambah_user">Submit</button>
                <a href="users.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</section>