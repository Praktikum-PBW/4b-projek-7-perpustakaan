<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between mt-5">
            <h4>Tambah Buku</h4>
         </div>
         <form action="index.php?page=buku_store" method="post">
            <div class="mb-2">
                <label for="id_kategori" class="form-label">Kategori</label>
                <select name="id_kategori" id="id_kategori" class="form-select">
                    <?php
                    $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                    foreach($kategori as $data){
                        ?>
                        <option value="<?=$data['id']?>"><?=$data['nama_kategori']?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="mb-2">
                <label for="nama_buku" class="form-label">Nama Buku</label>
                <input type="text" name="nama_buku" id="nama_buku" class="form-control">
            </div>
            <div class="mb-2">
                <label for="nama_pembuat" class="form-label">Penulis</label>
                <input type="text" name="nama_pembuat" id="nama_pembuat" class="form-control">
            </div>
            <div class="mb-2">
                <label for="sinopsis" class="form-label">Sinopsis</label>
                <input type="text" name="sinopsis" id="sinopsis" class="form-control">
            </div>
            <input type="submit" value="Tambah" name="tambah" class="btn btn-primary">
            
         </form>
        
    </div>
</div>