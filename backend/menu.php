<?php
if(isset($_GET['page'])){

    include '../lib/koneksi.php';

    $page = $_GET['page'];

    switch($page){
        case 'dashboard':
            include 'dashboard.php';
            break;
        case 'kategori':
            include 'kategori/index.php';
            break;
         case 'kategori_create':
            include 'kategori/create.php';
            break;
        case 'kategori_store':
            include 'kategori/store.php';
            break;
        case 'kategori_edit':
            include 'kategori/edit.php';
            break;
        case 'kategori_update':
            include 'kategori/update.php';
            break;
        case 'kategori_delete':
            include 'kategori/delete.php';
            break;
        case 'buku':
            include 'buku/index.php';
            break;
         case 'buku_create':
            include 'buku/create.php';
            break;
        case 'buku_store':
            include 'buku/store.php';
            break;
        case 'buku_edit':
            include 'buku/edit.php';
            break;
        case 'buku_update':
            include 'buku/update.php';
            break;
        case 'buku_delete':
            include 'buku/delete.php';
            break;
        default:
            echo "maaf, halaman tidak ditemukan";
            break;
        }
 }else{
     include 'dashboard.php';
 }