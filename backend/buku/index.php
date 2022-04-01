<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between mt-5">
            <h4>Data Buku</h4>
            <a href="index.php?page=buku_create" class="btn btn-primary">Tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kategori</th>
                        <th>Nama buku</th>
                        <th>Penulis</th>
                        <th>Sinopsis</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM buku JOIN kategori ON buku.id_kategori = kategori.id");
                    $no = 1;
                    if (mysqli_num_rows($query) > 0) {
                        foreach ($query as $data) {
                    ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>
                                    <span class="bg-success text-white px-4">
                                        <?= $data['nama_kategori'] ?>
                                    </span>
                                </td>
                                <td><?= $data['nama_buku'] ?></td>
                                <td><?= $data['nama_pembuat'] ?></td>
                                <td><?= $data['sinopsis'] ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="index.php?page=buku_edit&id=<?= $data['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="index.php?page=buku_delete&id=<?= $data['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="6">
                                <div class="alert alert-danger">Tidak ada data</div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>