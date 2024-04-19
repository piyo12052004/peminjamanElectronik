<?php
include '../../config/koneksi.php';


$id_transaksi = uniqid('B-');
$id_user = 1; //contoh id user 
$id_brng = 1;
$jml_pnjm = $_POST['jml_pnjm'];
$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];
$nm_brng = $_POST['nm_brng'];
$cetx_date = date("Y-m-d H:i:s");


mysqli_query($conn, "INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_brng`, `jml_pnjm`, `nama`, `keterangan`, `nm_brng`, `status`, `crtx_byxx`, `cetx_date`) VALUES ('$id_transaksi', $id_user, $id_brng, '$jml_pnjm', '$nama', '$keterangan', '$nm_brng', 'padding', 'piyo', '$cetx_date')");