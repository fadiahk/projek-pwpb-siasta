<?php 
  include 'assets/inc/koneksi.php';
?>

<!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">News</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">News</li>
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
                    <button class="btn btn-primary" id="btn_tambah" name="btn_tambah">Tambah</button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Image</th>
                    <th>Isi</th>
                    <th>Tanggal</th>
                    <th>Penginput</th>
                    <th>Aksi</th>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    $query = mysqli_query($koneksi,"SELECT * FROM news INNER JOIN user ON news.penginput = user.id_user;");
                    if(mysqli_num_rows($query) > 0){
                        while($data = mysqli_fetch_array($query)){
                            
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['judul_news']; ?></td>
                                <td><?php echo $data['img_news']; ?></td>
                                <td><?php echo $data['isi_news']; ?></td>
                                <td><?php echo $data['tgl_upload']; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td>
                                    <input type="button" class="btn btn-warning" id="btn_edit" name="btn_edit" value="Edit">
                                    <input type="button" class="btn btn-danger" id="btn_hapus" name="btn_hapus" value="Hapus">
                                </td>
                            </tr>
                            <?php
                        }
                    }else{
                        ?>
                        <tr>
                            <td colspan="7" class="text-center text-muted">Tidak Ada Data</td>
                        </tr>
                        <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>
            </div>
        </div>
    </div>

    </section>
    <!-- /.content -->