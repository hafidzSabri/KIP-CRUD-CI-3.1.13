<div class="container">
<div class="card">
  <div class="card-header">
    Mengubah Data KIP
  </div>
  <div class="card-body">
      <form action="" method="post">
        <input type="hidden" name="id" value="<?= $penerima['id'];?>">
        <h5 class="card-title">Nama Penerima</h5>
          <input type="text" name="nama" class="form-control" id="nama" value="<?= $penerima['nama'];?>" required>

        <h5 class="card-title">NIK</h5>
          <input type="text" name="nik"class="form-control" id="nik"value="<?= $penerima['nik'];?>" required>

        <h5 class="card-title">NISN</h5>
          <input tyxpe="text" name="nisn" class="form-control" id="nisn"value="<?= $penerima['nisn'];?>" required>

        <h5>Jenis Kelamin</h5>
          <select class="form-control" name="jenisKelamin" id="jenisKelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>

        <h5 class="card-title">Golongan</h5>
          <input type="text" name="golongan" class="form-control" id="golongan"value="<?= $penerima['golongan'];?>"required><br>

        <button type="submit" name="edit" class="btn btn-primary">Ubah Data</button>
      </form>
  </div>
</div>
</div>