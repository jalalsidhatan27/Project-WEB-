<div class="row">
    <div class="card shadow col-lg-7">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Tambah Kategori</h1>
            </div>
            <form class="kategori" action="<?= base_url('kategori/input'); ?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nama_kategori" name="nama_kategori"
                        placeholder="Masukkan Nama Kategori Barang" require>
                </div>
                <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah">
            </form>
            <hr>
            <div class="text-center"><a class="small" href="<?php echo base_url('kategori') ?>">Kembali</a>
            </div>
        </div>
    </div>
</div>