<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header text-bold">
                FORM UBAH DATA Siswa
            </div>
            <div class="card-body">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $siswa['id']; ?>">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama']; ?>">
                <small class="form-text text-danger"><?= form_error('nama');    ?></small>
            </div>
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="number" class="form-control" id="nisn" name="nisn" value="<?= $siswa['nisn']; ?>">
                <small class="form-text text-danger"><?= form_error('nisn');    ?></small>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $siswa['alamat']; ?>">
                <small class="form-text text-danger"><?= form_error('alamat');    ?></small>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $siswa['tanggal_lahir']; ?>">

            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <select class="form-control" id="kelas" name="kelas">
                    <?php foreach($kelas as $kls) : ?>
                        <?php if( $kls == $siswa['kelas'] )  : ?>
                            <option value="<?= $kls; ?>" selected><?= "$kls" ?></option>
                        <?php else : ?>
                            <option value="<?= $kls; ?>"><?= "$kls" ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" name="ubah_siswa" class="btn btn-primary float-right">Ubah siswa</button>
            <button type="reset" class="btn btn-danger float-right" data-dissmmims="card">Reset Data</button>
            <a href="<?= base_url(); ?>admin/siswa" class="btn btn-secondary float-right">Batalkan</a>
            </form>
            </div>
        </div>

            

        </div>
    </div>

</div>