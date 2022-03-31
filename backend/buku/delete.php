<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM buku WHERE id= '$id' ");

    if ($query) {
        header("Location: index.php?page=buku");
    } else {
        echo "Gagal";
    }
}
