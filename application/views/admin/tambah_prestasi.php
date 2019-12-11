<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header text-bold">
                FORM TAMBAH DATA SISWA
            </div>
            <div class="card-body">
            <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama siswa...">
                <small class="form-text text-danger"><?= form_error('nama');    ?></small>
            </div>
            <div class="form-group">
                <label for="prestasi">Prestasi</label>
                <input type="text" class="form-control" id="prestasi" name="prestasi" placeholder="Masukkan prestasi siswa...">
                <small class="form-text text-danger"><?= form_error('prestasi');    ?></small>
            </div>
            <button type="submit" name="tambah_siswa" class="btn btn-primary float-right">Tambah Prestasi Siswa</button>
            <button type="reset" class="btn btn-danger float-right" data-dissmmims="card">Reset Data</button>
            <a href="<?= base_url(); ?>admin/siswa" class="btn btn-secondary float-right">Batalkan</a>
            </form>
            </div>
        </div>

            

        </div>
    </div>

</div>