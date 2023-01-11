
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Penerbit</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="penerbit">Penerbit</a></li>
              <li class="breadcrumb-item active">Tambah Penerbit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Penerbit</h3>
        <div class="card-tools">
          <a href="penerbit" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <?php if(!empty($_GET['notif'])){?>
          <?php if($_GET['notif']=="penerbitkosong"){?>
          <div class="alert alert-danger" role="alert">
          Maaf Data Penerbit Wajib Diisi</div>
          <?php }?>
          <?php if($_GET['notif']=="alamatkosong"){?>
          <div class="alert alert-danger" role="alert">
          Maaf Data Alamat Wajib Diisi</div>
          <?php }?>
      <?php }?>
      <form class="form-horizontal" method="post" action= "konfirmasi-tambah-penerbit">
        <div class="card-body">
          <div class="form-group row">
            <label for="tag" class="col-sm-3 col-form-label">Penerbit</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="penerbit" name="penerbit" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="isi" class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="alamat" value="<?php echo $alamat;?>" id="alamat" rows="12"></textarea>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>

