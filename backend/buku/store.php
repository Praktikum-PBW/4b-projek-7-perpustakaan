<?php
if(isset($_POST['tambah'])){

    $id_kategori = $_POST['id_kategori'];
    $nama_buku = $_POST['nama_buku'];
    $nama_pembuat = $_POST['nama_pembuat'];
    $sinopsis = $_POST['sinopsis'];
    
    $query = mysqli_query($koneksi, "INSERT INTO buku VALUES(null,'$id_kategori','$nama_buku','$nama_pembuat','$sinopsis')");
    if ($query) {
        header("Location: index.php?page=buku");
    } else {
        echo "Gagal";
    }

}