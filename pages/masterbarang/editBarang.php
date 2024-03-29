<?php

include '../../config/koneksi.php';

if (isset($_POST['edit_id'])) {
    $id = $_POST['edit_id'];
    $sql = "SELECT * FROM mstr_barang WHERE id_barang='$id'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id_barang'];
        $namaBarang = $row['nama_brng'];
        $stokBarang = $row['stok_brng'];
        $keterangan = $row['ket_brng'];
        $jenisBarang = $row['jens_brng'];
        $statusBarang = $row['status'];
    }
};
?>

<div class="mb-3">
    <label for="idBarang" class="form-label">ID Barang</label>
    <input type="text" class="form-control" id="idBarang" name="idBarang" readonly value="<?= $id ?>">
</div>
<div class="mb-3">
    <label for="namaBarang" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" id="namaBarang" name="namaBarang" value="<?= $namaBarang ?>">
</div>
<div class="mb-3">
    <label for="stokBarang" class="form-label">Stok Barang</label>
    <input type="number" class="form-control" id="stokBarang" name="stokBarang" value="<?= $stokBarang ?>">
</div>
<div class="form-group">
    <label for="jenisBarang" class="font-weight-bold">Jenis Barang</label>
    <select class="form-control" id="jenisBarang" name="jenisBarang">
        <option selected><?= $jenisBarang ?></option>
        <option>Peralatan Konsumen</option>
        <option>Peralatan Komunikasi</option>
        <option>Peralatan Komputer</option>
        <option>Peralatan Hiburan</option>
        <option>Peralatan Medis</option>
    </select>
</div>
<div class="form-group">
    <label for="keterangan" class="font-weight-bold">Keterangan</label>
    <textarea class="form-control" id="keterangan" rows="3" name="keterangan"><?= $keterangan ?></textarea>
</div>