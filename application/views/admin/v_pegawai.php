
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Pegawai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pegawai</li>
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
              <a href="" class="btn btn-primary">Tambah Data Pegawai</a>
          </div>
        </div>
      </div> -->
      <?php if($this->session->flashdata('flash')) :?>
        <div class="row mt-3">
          <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Data Pegawai <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <a href="<?= base_url();?>admin/pegawai/tambah_pegawai" class="btn btn-primary"><i class="fas fa-bars"></i> Tambah Data pegawai</a>
      <div class="row mt3">
        <div class="col-md-6">
            <form action="" method="post">
            <div class="input-group mb-3 mt-3">
              <input type="text" class="form-control" placeholder="Cari data pegawai..." name="keyword">
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
          <th>Nama</th>
          <th>NIP</th>
          <th>Alamat</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Pekerjaan</th>
        </tr>
        <tr>
          <td>
            <?php if(empty($pegawai)) : ?>
              <div class="alert alert-danger" role="alert">
                Data pegawai tidak ditemukan.
              </div>
              <?php endif; ?>
          </td>
        </tr>
          <?php 
          $no = 1;
          foreach($pegawai as $pg) : ?>
           <tr>
                <td><?= $no++ ?></td>
                <td>
                  <a href="<?= base_url(); ?>admin/pegawai/ubah_pegawai/<?= $pg['id']; ?>" class="btn btn-success">Perbaharui Data pegawai</a>
                  <a href="<?= base_url(); ?>admin/pegawai/hapus_pegawai/<?= $pg['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus Data pegawai</a>
                </td>
                <td><?= $pg['nama'] ?></td>
                <td><?= $pg['nip'] ?></td>
                <td><?= $pg['alamat'] ?></td>
                <td><?= $pg['tanggal_lahir'] ?></td>
                <td><?= $pg['jenis_pekerjaan'] ?></td>
            </tr>
          <?php endforeach; ?>
      </table>
    </section>
  </div>
