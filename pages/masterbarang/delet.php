<?php

include '../../config/koneksi.php';


if(isset($_GET['id_barang'])) {
    // Tangkap nilai ID dari URL
    $id = $_GET['id_barang'];

    // Query untuk menghapus data
    $sql = "DELETE FROM `mstr_barang` WHERE id_barang = '$id'";

    if (mysqli_query($conn, $sql)) {
        // Jika data berhasil dihapus, redirect kembali ke halaman sebelumnya
        header("Location: ./listMasterBarang.php");
        exit; // Pastikan untuk keluar dari skrip setelah mengirimkan header redirect
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Tidak ada ID yang diterima";
}

// Tutup koneksi
mysqli_close($koneksi);

