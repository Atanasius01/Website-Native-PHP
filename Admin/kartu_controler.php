<?php
include_once 'koneksi.php';
include_once 'models/Kartu.php';

// Menangkap request form

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$diskon = $_POST['diskon'];
$iuran = $_POST['iuran'];

// menangkap form diatas dan dijadikan array
$data = [
    $kode,
    $nama,
    $diskon,
    $iuran
];
$model = new Kartu();
$tombol = $_REQUEST['proses'];
switch($tombol){
    case 'simpan':$model->simpan($data); break;
    case 'ubah' :
        $data[] = $_POST['id']; $model->ubah($data);break;
    default:
    header('Location:index.php?url=kartu');
    break;
}
header('Location:index.php?url=kartu')
?>