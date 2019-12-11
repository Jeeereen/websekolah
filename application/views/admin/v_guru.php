
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Guru</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Guru</li>
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
              <a href="" class="btn btn-primary">Tambah Data Guru</a>
          </div>
        </div>
      </div> -->
      <?php if($this->session->flashdata('flash')) :?>
        <div class="row mt-3">
          <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Data Guru <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <a href="<?= base_url();?>admin/guru/tambah_guru" class="btn btn-primary"><i class="fas fa-bars"></i> Tambah Data guru</a>
      <div class="row mt3">
        <div class="col-md-6">
            <form action="" method="post">
            <div class="input-group mb-3 mt-3">
              <input type="text" class="form-control" placeholder="Cari data guru..." name="keyword">
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
          <th>Mata Pelajaran</th>
        </tr>
        <tr>
          <td>
            <?php if(empty($guru)) : ?>
              <div class="alert alert-danger" role="alert">
                Data guru tidak ditemukan.
              </div>
              <?php endif; ?>
          </td>
        </tr>
          <?php 
          $no = 1;
          foreach($guru as $gr) : ?>
           <tr>
                <td><?= $no++ ?></td>
                <td>
                  <a href="<?= base_url(); ?>admin/guru/ubah_guru/<?= $gr['id']; ?>" class="btn btn-success">Perbaharui Data Guru</a>
                  <a href="<?= base_url(); ?>admin/guru/hapus_guru/<?= $gr['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus Data Guru</a>
                </td>
                <td><?= $gr['nama'] ?></td>
                <td><?= $gr['nip'] ?></td>
                <td><?= $gr['alamat'] ?></td>
                <td><?= $gr['tanggal_lahir'] ?></td>
                <td><?= $gr['mata_pelajaran'] ?></td>
            </tr>
          <?php endforeach; ?>
      </table>
    </section>
  </div>

  <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
</button> -->

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">               
          <form action="" method="post">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required >
              </div>
                <div class="form-group">
                <label for="nip">Nip</label>
                <input type="number" class="form-control" id="nip" name="nip">
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
              </div>
              <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
              </div>
              <div class="form-group">
                      <label for="mata_pelajaran">Mata Pelajaran</label>
                          <select class="form-control" id="mata_pelajaran" name="mata_pelajaran  ">
                            <option>MATEMATIKA</option>
                            <option>FISIKA</option>
                            <option>KIMIA</option>
                            <option>BIOLOGI</option>
                            <option>BAHASA INDONESIA</option>
                            <option>BAHASA INGGRIS</option>
                            <option>SEJARAH</option>
                            <option>AGAMA</option>
                            <option>GEOLOGI</option>
                            <option>EKONOMI</option>
                            <option>SENI BUDAYA</option>

                          </select>
                        </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
    </div>
  </div>
</div> -->


  

