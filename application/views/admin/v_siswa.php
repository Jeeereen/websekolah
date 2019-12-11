
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content ">
    <?php if($this->session->flashdata('flash')) :?>
        <div class="row mt-3">
          <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Data Siswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <a href="<?= base_url();?>admin/siswa/tambah_siswa" class="btn btn-primary"><i class="fas fa-bars"></i> Tambah Data Siswa</a>
      <div class="row mt3">
        <div class="col-md-6">
            <form action="" method="post">
            <div class="input-group mb-3 mt-3">
              <input type="text" class="form-control" placeholder="Cari data Siswa..." name="keyword">
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
          <th>NISN</th>
          <th>Alamat</th>
          <th>Tanggal Lahir</th>
          <th>Kelas</th>
        </tr>
        <tr>
          <td>
            <?php if(empty($siswa)) : ?>
              <div class="alert alert-danger" role="alert">
                Data siswa tidak ditemukan.
              </div>
              <?php endif; ?>
          </td>
        </tr>
          <?php 
          $no = 1;
          foreach($siswa as $sw) : ?>
           <tr>
                <td><?= $no++ ?></td>
                <td>
                  <a href="<?= base_url(); ?>admin/siswa/ubah_siswa/<?= $sw['id']; ?>" class="btn btn-success">Perbaharui Data Siswa</a>
                  <a href="<?= base_url(); ?>admin/siswa/hapus_siswa/<?= $sw['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus Data Siswa</a>
                </td>
                <td><?= $sw['nama'] ?></td>
                <td><?= $sw['nisn'] ?></td>
                <td><?= $sw['alamat'] ?></td>
                <td><?= $sw['tanggal_lahir'] ?></td>
                <td><?= $sw['kelas'] ?></td>
            </tr>
          <?php endforeach; ?>
      </table>
    </section>
    <!-- Button trigger modal -->
        <!-- Modal -->
        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title mb-4" id="exampleModalLabel">Input Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="<?= base_url().'siswa/tambah_siswa'; ?> "> 
                  <div class="form-grup ">
                      <label>Nama Siswa</label>
                      <input type="Text" name="nama" class="form-control">
                    </div>
                    <div class="form-grup">
                      <label>Nomor Induk</label>
                      <input type="Text" name="nomor_induk" class="form-control">
                    </div>
                    <div class="form-grup">
                      <label>Tempat Tanggal lahir</label>
                      <input type="Text" name="lahir" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="kelas">Kelas</label>
                          <select class="form-control" id="kelas" name="kelas  ">
                            'MIA 1','MIA 2','MIA 3','MIA 4','MIA 5','MIA 6','IIS 1','IIS 2','IIS 3','IIS 4','IIS 5'

                          </select>
                        </div>
                    <div class="form-grup">
                      <label>Motto</label>
                      <input type="Text" name="motto" class="form-control">
                    </div>
                    <div class="float-right" >
                        <button type="reset" class="btn btn-danger mt-4 mb-2" data-dismiss="modal">Resert</button>
                        <button type="submit"  class="btn btn-primary mt-4 mb-2" nama="input_data">Save changes</button>
                      </div>
                </form>
              </div>
          </div>
      </div>
  </div>
</div> -->