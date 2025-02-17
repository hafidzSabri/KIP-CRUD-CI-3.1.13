<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $judul; ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand">Kartu Indonesia Pintar  
    <img src="<?php echo base_url(); ?>assets/kip.jpeg" width="100"alt="profile">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page"href="<?= base_url(); ?>index.php/penerima">Dashboard</a>
        <a class="nav-link active" aria-current="page"href="<?= base_url(); ?>index.php/penerima/pembuat">Tentang Pembuat</a>
        <a class="nav-link active" aria-current="page"href="<?= base_url(); ?>index.php/penerima/penjelasan">Tentang Aplikasi</a>
      </div>
    </div>
  </div>
</nav>