<?php
include '../../config/koneksi.php';
$id_barang = uniqid('B-');
$namaBarang = $_POST['namaBarang'];
$stokBarang = $_POST['stokBarang'];
$jenisBarang = $_POST['jenisBarang'];
$keterangan = $_POST['keterangan'];
$crtx_date = date("Y-m-d H:i:s");


mysqli_query($conn, "INSERT INTO mstr_barang SET
            id_barang = '$id_barang',
            nama_brng = '$namaBarang',
            stok_brng = '$stokBarang',
            ket_brng = '$keterangan',
            jens_brng = '$jenisBarang',
            status = '1',
            crtx_byxx = 'admin',
            crtx_date = '$crtx_date'
             ");