<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header text-bold">
                FORM UBAH DATA PRESTASI SISWA
            </div>
            <div class="card-body">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $prestasi['id']; ?>">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $prestasi['nama']; ?>">
                <small class="form-text text-danger"><?= form_error('nama');    ?></small>
            </div>
            <div class="form-group">
                <label for="prestasi">Prestasi Siswa</label>
                <input type="text" class="form-control" id="prestasi" name="prestasi" value="<?= $prestasi['prestasi']; ?>">
                <small class="form-text text-danger"><?= form_error('prestasi');    ?></small>
            </div>
            <button type="submit" name="ubah_prestasi" class="btn btn-primary float-right">Ubah prestasi prestasi</button>
            <button type="reset" class="btn btn-danger float-right" data-dissmmims="card">Reset Data</button>
            <a href="<?= base_url(); ?>admin/prestasi" class="btn btn-secondary float-right">Batalkan</a>
            </form>
            </div>
        </div>

            

        </div>
    </div>

</div>