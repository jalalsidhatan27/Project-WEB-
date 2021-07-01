<div class="row">
    <div class="card shadow col-lg-7">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Tambah Barang</h1>
            </div>
            <form class="barang" action="<?= base_url('barang/input'); ?>" method="post">
                <div class="form-group">
                    <select id="grup" class="form-control" name="grup" require>
                        <option value="" selected disabled hidden>Pilih Kategori</option>
                        <?php
                        // Membuat option select otomatis
                        foreach ($kategori as $row) {
                            echo "<option value='" . $row->id_kategoori . "'>" . $row->kategori . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nama_barang" name="nama_barang"
                        placeholder="Masukkan Nama Barang" require>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="merk" name="merk"
                        placeholder="Masukkan Merk Barang" require>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="harga_beli" name="harga_beli"
                        placeholder="Masukkan Harga Beli" require>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="harga_jual" name="harga_jual"
                        placeholder="Masukkan Harga Jual" require>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="satuan" name="satuan"
                        placeholder="Masukkan Satuan Barang" require>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="stok" name="stok"
                        placeholder="Masukkan Stok Barang" require>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah">
            </form>
            <hr>
            <div class="text-center"><a class="small" href="<?php echo base_url('barang') ?>">Kembali</a>
            </div>
        </div>
    </div>
</div>