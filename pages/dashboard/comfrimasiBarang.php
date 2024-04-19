<?php
include '../../config/koneksi.php';


$id = $_GET['id']; // Mendapatkan ID dari permintaan


// Melakukan pembaruan di database
$sql = "UPDATE transaksi SET status='Success' WHERE id_transaksi='$id'";


if (mysqli_query($conn, $sql)) {
    echo "Update berhasil";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);