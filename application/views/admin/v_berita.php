
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Berita</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Berita</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content ">
      <!-- <div class="container">
        <div class="row mt-3">
          <div class="col-md-6">
              <a href="" class="btn btn-primary">Tambah Data Berita</a>
          </div>
        </div>
      </div> -->
      <?php if($this->session->flashdata('flash')) :?>
        <div class="row mt-3">
          <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Data Berita <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <a href="<?= base_url();?>admin/berita/tambah_berita" class="btn btn-primary"><i class="fas fa-bars"></i> Tambah Data berita</a>
      <div class="row mt3">
        <div class="col-md-6">
            <form action="" method="post">
            <div class="input-group mb-3 mt-3">
              <input type="text" class="form-control" placeholder="Cari data berita..." name="keyword">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" >Cari</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <table class="table">
        <tr>
          <th>NO</th>
          <th>Aksi</th>
          <th>Judul Berita</th>
          <th>Isi Berita</th>
        </tr>
        <tr>
          <td>
            <?php if(empty($berita)) : ?>
              <div class="alert alert-danger" role="alert">
                Data berita tidak ditemukan.
              </div>
              <?php endif; ?>
          </td>
        </tr>
          <?php 
          $no = 1;
          foreach($berita as $brt) : ?>
           <tr>
                <td><?= $no++ ?></td>
                <td>
                  <a href="<?= base_url(); ?>admin/berita/ubah_berita/<?= $brt['id']; ?>" class="btn btn-success">Perbaharui Data berita</a>
                  <a href="<?= base_url(); ?>admin/berita/hapus_berita/<?= $brt['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus Data berita</a>
                </td>
                <td><?= $brt['judul_berita'] ?></td>
                <td><?= $brt['isi_berita'] ?></td>
            </tr>
          <?php endforeach; ?>
      </table>
    </section>
  </div>
