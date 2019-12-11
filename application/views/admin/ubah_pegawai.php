<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header text-bold">
                FORM UBAH DATA PEGAWAI
            </div>
            <div class="card-body">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $pegawai['id']; ?>">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $pegawai['nama']; ?>">
                <small class="form-text text-danger"><?= form_error('nama');    ?></small>
            </div>
            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="number" class="form-control" id="nip" name="nip" value="<?= $pegawai['nip']; ?>">
                <small class="form-text text-danger"><?= form_error('nip');    ?></small>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $pegawai['alamat']; ?>">
                <small class="form-text text-danger"><?= form_error('alamat');    ?></small>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $pegawai['tanggal_lahir']; ?>">

            </div>
            <div class="form-group">
                <label for="jenis_pekerjaan">Jenis Pekerjaann</label>
                <select class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan">
                    <?php foreach($jenis_pekerjaan as $jp) : ?>
                        <?php if( $jp == $pegawai['jenis_pekerjaan'] )  : ?>
                            <option value="<?= $jp; ?>" selected><?= "$jp" ?></option>
                        <?php else : ?>
                        <option value="<?= $jp; ?>"><?= "$jp" ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" name="ubah_pegawai" class="btn btn-primary float-right">Ubah Data pegawai</button>
            <button type="reset" class="btn btn-danger float-right" data-dissmmims="card">Reset Data</button>
            <a href="<?= base_url(); ?>admin/pegawai" class="btn btn-secondary float-right">Batalkan</a>
            </form>
            </div>
        </div>

            

        </div>
    </div>

</div>