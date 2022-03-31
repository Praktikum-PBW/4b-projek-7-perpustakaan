<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $nama_kategori = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_kategori']))));

    $query = mysqli_query($koneksi, "DELETE FROM kategori WHERE id='$id'");
    if($query){
        header("Location: index.php?page=kategori");
    }else{
        echo"gagal";
    }
}