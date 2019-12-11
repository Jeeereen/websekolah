<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header text-bold">
                FORM UBAH DATA BERITA
            </div>
            <div class="card-body">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $berita['id']; ?>">
            <div class="form-group">
                <label for="judul_berita">Judul Berita</label>
                <input type="text" class="form-control" id="judul_berita" name="judul_berita" value="<?= $berita['judul_berita']; ?>">
                <small class="form-text text-danger"><?= form_error('judul_berita');    ?></small>
            </div>
            <div class="form-group">
                <label for="isi_berita">Isi Berita</label>
                <textarea class="form-control" id="isi_berita" name="isi_berita" placeholder="Masukkan Berita..."  rows="5"></textarea>
            </div>
            <button type="submit" name="ubah_berita" class="btn btn-primary float-right">Ubah Data berita</button>
            <button type="reset" class="btn btn-danger float-right" data-dissmmims="card">Reset Data</button>
            <a href="<?= base_url(); ?>admin/berita" class="btn btn-secondary float-right">Batalkan</a>
            </form>
            </div>
        </div>

            

        </div>
    </div>

</div>