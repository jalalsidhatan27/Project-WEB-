<!-- DataTales -->
<div class="card shadow mb-4 w-100">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
        <br>
        <td>
            <a href="<?php echo base_url('barang/tambah'); ?>"><button id="tombol-simpan" onclick="clickModals()"
                    class="btn btn-primary"><i class="fa fa-plus"></i>
                    Tambah Data Barang</button></a>
        </td>
        </br>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Barang</th>
                        <th>Kategori</th>
                        <th>Nama Barang</th>
                        <th>Merk Barang</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Satuan</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>ID Barang</th>
                        <th>Kategori</th>
                        <th>Nama Barang</th>
                        <th>Merk Barang</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Satuan</th>
                        <th>Stok</th>
                        <th style="min-width: 100px;">Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $no = 1;
                    foreach ($barang as $row) { ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->id_barang; ?></td>
                        <td><?php echo $row->nama_kategori; ?></td>
                        <td><?php echo $row->nama_barang; ?></td>
                        <td><?php echo $row->merk; ?></td>
                        <td><?php echo $row->harga_beli; ?></td>
                        <td><?php echo $row->harga_jual; ?></td>
                        <td><?php echo $row->satuan; ?></td>
                        <td><?php echo $row->stok; ?></td>
                        <td>
                            <?php echo '<a href="' . base_url('barang/edit/' . $row->id_barang) . '" class="form-group mt-4 mb-0">Edit</a>';
                                echo " ";
                                echo '<a href="' . base_url('barang/hapus/' . $row->id_barang) . '"
                                btn btn-primary">Hapus</a>';
                                ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>