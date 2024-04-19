<?php

include '../../config/koneksi.php';

include '../../config/koneksi.php';
$getData = mysqli_query($conn, "SELECT id_barang, nama_brng,stok_brng,jens_brng,status FROM mstr_barang");

if (isset($_POST['edit_id'])) {
    $id = $_POST['edit_id'];
    $sql = "SELECT * FROM transaksi WHERE id_transaksi='$id'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id_transaksi'];
        $namaBarang = $row['nm_brng'];
        $stokBarang = $row['jml_pnjm'];
        $keterangan = $row['keterangan'];
        $jenisBarang = $row['nm_brng'];
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
    <label for="stokBarang" class="form-label">Jumlah Barang</label>
    <input type="number" class="form-control" id="stokBarang" name="stokBarang" value="<?= $stokBarang ?>">
</div>
<div class="form-group">
    <label for="jenisBarang" class="font-weight-bold">Nama Barang</label>
    <select class="form-control" id="jenisBarang" name="jenisBarang">
        <option selected><?= $jenisBarang ?></option>
        <?php foreach($getData as $data) :?>
            <option><?= $data['nama_brng'];?></option>
        <?php endforeach ?>
    </select>
</div>
<div class="form-group">
    <label for="keterangan" class="font-weight-bold">Keterangan</label>
    <textarea class="form-control" id="keterangan" rows="3" name="keterangan"><?= $keterangan ?></textarea>
</div>