<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between mt-5">
            <h4>Data Kategori</h4>
            <a href="index.php?page=kategori_create" class="btn btn-primary">Tambah Kategori</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY nama_kategori DESC ");
                    $no =1;
                    if(mysqli_num_rows($query) > 0 ){
                    foreach($query as $data){
                    ?>
                     <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['nama_kategori']?></td>
                        <td>
                            <div class="btn-group">
                                <a href="index.php?page=kategori_edit&id=<?=$data['id']?>" class="btn btn-warning">edit</a>
                                <a href="index.php?page=kategori_delete&id=<?=$data['id']?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">delete</a>
                            </div>
                        </td>
                     </tr>
                    <?php
                     }
                    }else{
                        ?>
                        <tr>
                            <td colspan="3">
                              <div class ="alert alert-danger">Tidak ada data</div>  
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