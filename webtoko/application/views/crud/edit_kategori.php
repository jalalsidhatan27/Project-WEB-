<div class="row">
    <div class="col-lg-7">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Edit Kategori</h1>
            </div>
            <?php foreach ($kategori as $row) { ?>
            <form class="kategori" action="<?php echo base_url('kategori/update'); ?>" method="post">
                <div class="form-group">
                    <input type="hidden" name="id_kategori" value="<?php echo $row->id_kategori; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nama_kategori" name="nama_kategori"
                        placeholder="Masukkan Nama Kategori" value="<?php echo $row->nama_kategori; ?>" required>
                </div>
                <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Update">
            </form>
            <?php } ?>
            <hr>
            <div class="text-center"><a class="small" href="<?php echo base_url('kategori') ?>">Kembali</a>
            </div>
        </div>
    </div>
</div>