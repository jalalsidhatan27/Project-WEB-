<!-- DataTales -->
<div class="card shadow mb-4 w-100">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kategori Barang</h6>
        <br>
        <td>
            <a href=""><button id="tombol-simpan" onclick="clickModals()" class="btn btn-primary"><i
                        class="fa fa-plus"></i>
                    Tambah Data Kategori</button></a>
        </td>
        </br>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th style="min-width: 100px;">Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $no = 1;
                    foreach ($kategori as $row) { ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->nama_kategori; ?></td>
                        <td>
                            <?php echo '<a href="' . base_url('kategori/edit/' . $row->id_kategori) . '" class="form-group mt-4 mb-0">Edit</a>';
                                echo " ";
                                echo '<a href="' . base_url('kategori/hapus/' . $row->id_kategori) . '"
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