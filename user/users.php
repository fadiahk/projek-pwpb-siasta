<?php
include 'assets/inc/koneksi.php';

if (isset($_POST['edit_user'])) {
  $id = $_POST['id_user'];
  $nama = $_POST['username'];
  $pass = $_POST['password'];
  $name = $_POST['nama_lengkap'];
  $user = $_POST['level'];
  $filename = $_FILES['foto']['name'];
  $ukuran = $_FILES['foto']['size'];
  session_start();
  $query =  $query = "";
  if (!empty($filename)) {
    $filenm = $rand . '_' . $filename;
    move_uploaded_file($_FILES['foto']['tmp_name'], 'uploadsuser/' . $filenm);
    $query = "UPDATE user SET img_user = '$filenm',username = '$nama',password = '$pass',nama_lengkap = '$name',level = '$user'  WHERE id_user = '$id';";
  } else {
    $query = "UPDATE user SET username = '$nama ',password = '$pass',nama_lengkap = '$name', level = '$user' WHERE id_user = '$id';";
  }
  mysqli_query($koneksi, $query);
  header("location:index.php?page=users");
}
if (isset($_POST['delete_user'])) {
  $id = $_POST['id_user'];
  $query = mysqli_query($koneksi, "DELETE FROM user WHERE id_user = '$id'");
  if ($query) {
    header('location:index.php?page=users');
  }
}
?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Users</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Users</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"></h3>
            <div class="card-tools">
              <a href="?page=tambah_user"><button class="btn btn-primary" id="btn_tambah" name="btn_tambah">Tambah</button></a>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <th>No</th>
                <th>Image User</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama Lengkap</th>
                <th>level</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM user = id_user;");
                if (mysqli_num_rows($query) > 0) {
                  while ($data = mysqli_fetch_array($query)) {

                ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><img src="uploadsuser/<?php echo $data['img_user']; ?>" width="50" height="50"> </td>
                      <td><?php echo $data['username']; ?></td>
                      <td><?php echo $data['password']; ?></td>
                      <td><?php echo $data['nama_lengkap']; ?></td>
                      <td><?php echo $data['level']; ?></td>
                      <td>
                        <a type="button" href="#" class="btn btn-warning" id="btn_edit" name="btn_edit" data-toggle="modal" data-target="#modal-edit-<?= $data['id_user'] ?>">Edit</a>
                        <a type="button" href="#" class="btn btn-danger" id="btn_hapus" name="btn_hapus" data-toggle="modal" data-target="#modal-hapus-<?= $data['id_user'] ?>">Hapus</a>
                      </td>
                    </tr>

                    <div class="modal fade" id="modal-edit-<?= $data['id_user'] ?>">
                      <div class="modal-dialog">
                        <div class="modal-content bg-success">
                          <div class="modal-header">
                            <h4 class="modal-title">Edit</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="users.php" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                              <input type="hidden" name="id_user" id="id_user" value="<?= $data['id_user'] ?>">
                              <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="foto" id="foto" class="form-control">
                              </div>
                              <form action="?page=users" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                  <label for="exampleInputPassword1"> Username </label>
                                  <input type="text" class="form-control" id="username" value="<?= $data['username'] ?>" name="username" placeholder="Username ">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <textarea name="password" class="form-control" id="password" placeholder="password" cols="30" rows="8"><?= $data['password'] ?></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Nama Lengkap</label>
                                  <input type="text" class="form-control" id="nama_lengkap" value="<?= $data['nama_lengkap'] ?>" name="nama_lengkap" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Level</label>
                                  <input type="text" class="form-control" id="level" value="<?= $data['level'] ?>" name="level" placeholder="Level" readonly>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-outline-light" name="edit_user" id="edit_user">Oke</button>
                            </div>
                          </form>
                        </div>
                        </form>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
          </div>
          <div class="modal fade" id="modal-hapus-<?= $data['id_user'] ?>">
            <div class="modal-dialog">
              <div class="modal-content bg-primary">
                <div class="modal-header">
                  <h4 class="modal-title">Hapus</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="users.php" method="POST">
                  <div class="modal-body">
                    <input type="hidden" name="id_user" id="id_user" value="<?= $data['id_user'] ?>">
                    <p>Apakah Anda Yakin Menghapus Data Ini ?</p>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-light" name="delete_user" id="delete_user">Oke</button>
                  </div>
                </form>

              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
        <?php
                  }
                } else {
        ?>
        <tr>
          <td colspan="7" class="text-center text-muted">Tidak Ada Data</td>
        </tr>
      <?php
                }
      ?>
      <section class="content">
      </section>
      <!-- /.content -->