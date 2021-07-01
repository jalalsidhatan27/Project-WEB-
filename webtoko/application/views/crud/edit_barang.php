<div class="row">
    <div class="col-lg-7">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Edit Barang</h1>
            </div>
            <?php foreach ($barang as $row) { ?>
            <form class="barang" action="<?php echo base_url('barang/update'); ?>" method="post">
                <div class="form-group">
                    <input type="hidden" name="id_barang" value="<?php echo $row->id_barang; ?>">
                    <div class="form-group">
                        <select id="nama_kategeri" class="form-control" name="nama_kategori" require>
                            <option value="" selected disabled hidden>Pilih Kategori</option>
                            <?php
                                // Membuat option select otomatis
                                foreach ($kategori as $row) : ?>
                            <option value="<?= $row->id_kategori ?>"
                                <?php echo ($row->id_kategori) ? 'selected="selected"' : ''; ?>>
                                <?= $row->kategori ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nama_barang" name="nama_barang"
                        placeholder="Masukkan Nama Barang" value="<?php echo $row->nama_barang; ?>" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="merk" name="merk"
                        placeholder="Masukkan Merk Barang" value="<?php echo $row->merk; ?>" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="harga_beli" name="harga_beli"
                        placeholder="Masukkan Harga Beli" value="<?php echo $row->harga_beli; ?>" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="harga_jual" name="harga_jual"
                        placeholder="Masukkan Harga Jual" value="<?php echo $row->harga_jual; ?>" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="satuan" name="satuan"
                        placeholder="Masukkan Satuan Barang" value="<?php echo $row->satuan; ?>" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="stok" name="stok"
                        placeholder="Masukkan Jumlah Stok" value="<?php echo $row->stok; ?>" required>
                </div>
        </div>
        <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Update">
        </form>
        <?php } ?>
        <hr>
        <div class="text-center"><a class="small" href="<?php echo base_url('barang') ?>">Kembali</a>
        </div>
    </div>
</div>