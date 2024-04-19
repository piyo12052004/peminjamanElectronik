<?php

include '../../config/koneksi.php';

$edit_id = $_POST['idBarang'];
$namaBarang = $_POST['namaBarang'];
$stokBarang = $_POST['stokBarang'];
$jenisBarang = $_POST['jenisBarang'];
$keterangan  = $_POST['keterangan'];

$sql = 'UPDATE transaksi SET nm_brng ="' . $namaBarang . '", jml_pnjm = "' . $stokBarang . '", keterangan = "' . $keterangan . '", nm_brng = "' . $jenisBarang . '" WHERE id_transaksi = "' . $edit_id . '" ';
$result = mysqli_query($conn, $sql);