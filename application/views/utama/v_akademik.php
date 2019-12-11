<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Prestasi Siswa</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Prestasi Siswa</li>
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
                        <input type="text" class="form-control" placeholder="Cari data prestasi siswa..." name="keyword">
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
                <th>Prestasi</th>
            </tr>
            <tr>
                <td>
                    <?php if (empty($prestasi)) : ?>
                        <div class="alert alert-danger" role="alert">
                            Prestasi tidak ditemukan.
                        </div>
                    <?php endif; ?>
                </td>
            </tr>
            <?php
            $no = 1;
            foreach ($prestasi as $ps) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $ps['nama'] ?></td>
                    <td><?= $ps['prestasi'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>