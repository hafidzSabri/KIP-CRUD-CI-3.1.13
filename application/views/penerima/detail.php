<div class="container">
<div class="card">
  <div class="card-header">
    Detail Data KIP
  </div>
  <div class="card-body">
  <form action="" method="post">
    <h4 class="card-title">Nama Penerima</h4>
    <h6 class="card-title"><?= $penerima['nama'] ?></h6>
    <br>
    <h4 class="card-title">NIK</h4>
    <h6 class="card-title"><?= $penerima['nik'] ?></h6>
    <br>
    <h4 class="card-title">NISN</h4>
    <h6 class="card-title"><?= $penerima['nisn'] ?></h6>
    <br>
    <h4 class="card-title">Jenis Kelamin</h4>
    <h6 class="card-title"><?= $penerima['jenisKelamin'] ?></h6>
    <br>
    <h4 class="card-title">Golongan</h4>
    <h6 class="card-title"><?= $penerima['golongan'] ?></h6>
    <br>
    <a href="<?= base_url(); ?>index.php/penerima" class="btn btn-primary">Kembali</a>
    
  </div>
</div>
</div>