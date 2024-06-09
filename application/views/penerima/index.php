<div class="container">

    <br>
    <div class="row">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Data Penerima KIP" name="keyword">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>
        
    <div class="row">
        <div class="col-md-6">
            <a href="<?=base_url(); ?>index.php/penerima/tambah" class="btn btn-primary">Tambah Data KIP</a>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-md-">
            <ul class="list-group list-group-flush">
                
                <?php foreach($penerima as $pnrm) : ?>
                    
                    <li class="list-group-item"><?= $pnrm['nama'] ?>
                        <a href="<?= base_url(); ?>index.php/penerima/hapus/<?= $pnrm['id'];?>" onclick="return confirm('Yakin?');" >Hapus</a>
                        <a href="<?= base_url(); ?>index.php/penerima/detail/<?= $pnrm['id'];?>" onclick="return confirm('Yakin?');" >Detail</a>
                        <a href="<?= base_url(); ?>index.php/penerima/edit/<?= $pnrm['id'];?>" onclick="return confirm('Yakin?');" >Ubah</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
