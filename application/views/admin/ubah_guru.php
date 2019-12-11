<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header text-bold">
                FORM UBAH DATA GURU
            </div>
            <div class="card-body">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $guru['id']; ?>">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $guru['nama']; ?>">
                <small class="form-text text-danger"><?= form_error('nama');    ?></small>
            </div>
            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="number" class="form-control" id="nip" name="nip" value="<?= $guru['nip']; ?>">
                <small class="form-text text-danger"><?= form_error('nip');    ?></small>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $guru['alamat']; ?>">
                <small class="form-text text-danger"><?= form_error('alamat');    ?></small>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $guru['tanggal_lahir']; ?>">

            </div>
            <div class="form-group">
                <label for="mata_pelajaran">Mata Pelajaran</label>
                <select class="form-control" id="mata_pelajaran" name="mata_pelajaran">
                    <?php foreach($matapelajaran as $mp) : ?>
                        <?php if( $mp == $guru['mata_pelajaran'] )  : ?>
                            <option value="<?= $mp; ?>" selected><?= "$mp" ?></option>
                        <?php else : ?>
                        <option value="<?= $mp; ?>"><?= "$mp" ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" name="ubah_guru" class="btn btn-primary float-right">Ubah Data Guru</button>
            <button type="reset" class="btn btn-danger float-right" data-dissmmims="card">Reset Data</button>
            <a href="<?= base_url(); ?>admin/guru" class="btn btn-secondary float-right">Batalkan</a>
            </form>
            </div>
        </div>

            

        </div>
    </div>

</div>