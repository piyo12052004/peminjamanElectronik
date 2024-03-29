<?php

include '../../config/koneksi.php';

$edit_id = $_POST['idBarang'];
$namaBarang = $_POST['namaBarang'];
$stokBarang = $_POST['stokBarang'];
$jenisBarang = $_POST['jenisBarang'];
$keterangan  = $_POST['keterangan'];

$sql = 'UPDATE mstr_barang SET nama_brng ="' . $namaBarang . '", stok_brng = "' . $stokBarang . '", ket_brng = "' . $keterangan . '", jens_brng = "' . $jenisBarang . '" WHERE id_barang = "' . $edit_id . '" ';
$result = mysqli_query($conn, $sql);