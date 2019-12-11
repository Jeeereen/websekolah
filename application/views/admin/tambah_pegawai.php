<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header text-bold">
                FORM TAMBAH DATA Pegawai
            </div>
            <div class="card-body">
            <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama pegawai...">
                <small class="form-text text-danger"><?= form_error('nama');    ?></small>
            </div>
            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="number" class="form-control" id="nip" name="nip" placeholder="Masukkan NIP pegawai...">
                <small class="form-text text-danger"><?= form_error('nip');    ?></small>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat pegawai...">
                <small class="form-text text-danger"><?= form_error('alamat');    ?></small>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir pegawai...">

            </div>
            <div class="form-group">
                <label for="jenis_pekerjaan">Mata Pelajaran</label>
                <select class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan">
                    <option>SEKERTARIS</option>
                    <option>FPERPUSTAKAAN</option>
                    <option>KEUANGAN</option>
                </select>
            </div>
            <button type="submit" name="tambah_pegawai" class="btn btn-primary float-right">Tambah pegawai</button>
            <button type="reset" class="btn btn-danger float-right" data-dissmmims="card">Reset Data</button>
            <a href="<?= base_url(); ?>admin/pegawai" class="btn btn-secondary float-right">Batalkan</a>
            </form>
            </div>
        </div>

            

        </div>
    </div>

</div>