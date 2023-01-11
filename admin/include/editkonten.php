<?php 

if(isset($_GET['data'])){
	$id_konten = $_GET['data'];
	$_SESSION['id_konten']=$id_konten;
	
    //get data kategori buku
	$sql_d = "SELECT judul, isi from konten where  
    id_konten = '$id_konten'";
    $query_d = mysqli_query($koneksi,$sql_d);
    while($data_d = mysqli_fetch_row($query_d)){
       $judul= $data_d[0];
       $isi= $data_d[1];
    }
}
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Data Konten</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="konten">Data Konten</a></li>
              <li class="breadcrumb-item active">Edit Data Konten</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data Konten</h3>
        <div class="card-tools">
          <a href="konten" class="btn btn-sm btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br></br>
      <?php if(!empty($_GET['notif'])){?>
                  <?php  if($_GET['notif']=="judulkosong"){?>
                        <div class="alert alert-danger" role="alert">
                        Judul Dilarang Kosong</div>
                        <?php } else if($_GET['notif']=="isikosong"){?>
                          <div class="alert alert-danger" role="alert">
                          Isi Dilarang Kosong</div>
                    <?php }}?>
      <form class="form-horizontal" method="POST" action="konfirmasi-edit-konten">
        <div class="card-body">
          
          <div class="form-group row">
            <label for="nim" class="col-sm-3 col-form-label">Judul</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="judul" id="nim" value="<?php echo $judul;?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="sinopsis" class="col-sm-3 col-form-label">Isi</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="isi" id="editor1" rows="12"><?php echo $isi;?></textarea>
            </div>
          </div>     

          </div>
        </div>

      </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>
