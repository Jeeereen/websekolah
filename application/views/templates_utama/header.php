<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/fontawesome-free/css/all.min.css">

  <!-- My CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

  <title>SMA NEGERI 6 LUWUK</title>
</head>

<body id="page-top col">
  <nav class="navbar navbar-expand-lg navbar-light p-3 mb-2 bg-info text-white fixed-top id=" mainNav">
    <div class="container">
      <!--membuat navbar di tengah-->
      <a class="navbar-brand btn btn-inline-light  " href="#page-top">SMAN 6 LUWU UTARA</a>
      <button class="navbar-toggler navbar-toggler-right" na type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="home">
            <a class="nav-link js-scroll-trigger bg-info ml-2" href="http://localhost/websekolah/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="profil_sekolah ">
            <a class="nav-link js-scroll-trigger bg-info ml-2" href="http://localhost/websekolah/profil">Profil Sekolah<span class="sr-only">(current)</span></a>
          </li>
          <!--dropdown-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle bg-info ml-2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Guru&Karyawan
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item btn bg-light" href="http://localhost/websekolah/guru">GURU</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item btn bg-light" href="http://localhost/websekolah/pegawai">PEGAWAI</a>
            </div>
          </li>
          <li class="akademik">
            <a class="nav-link js-scroll-trigger bg-info ml-2" href="http://localhost/websekolah/akademik">Akademik <span class="sr-only">(current)</span></a>
          </li>
          <!-- dropdown -->
          <li class="dropdown">
            <a class="nav-link dropdown-toggle bg-info ml-2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Hubungi Kami</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item btn bg-light" href="email.com"> <span class="fas fa-envelope-square"></span> Email </span> </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item btn bg-light" href="facebook.com"> <span class="fab fa-facebook"></span> Facebook </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item btn bg-light" href="fax.com"> <span class="fas fa-fax"></span>Fax </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item btn bg-light" href="youtube.com"><span class="fab fa-youtube-square"></span> Youtube</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light bg-info my-2 my-sm-0  " type="submit">Cari</button>
        </form>
      </div>
    </div>
    </div>
  </nav>