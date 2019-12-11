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
        <div class="row mt3">
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="input-group mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Cari data guru..." name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <table class="table">
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Mata Pelajaran</th>
            </tr>
            <tr>
                <td>
                    <?php if (empty($guru)) : ?>
                        <div class="alert alert-danger" role="alert">
                            Data guru tidak ditemukan.
                        </div>
                    <?php endif; ?>
                </td>
            </tr>
            <?php
            $no = 1;
            foreach ($guru as $gr) : ?>
                <tr>
                    <td><?= $no++ ?></td>
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