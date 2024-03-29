<?php

include '../../config/koneksi.php';
$getData = mysqli_query($conn, "SELECT id_barang, nama_brng,stok_brng,jens_brng,status FROM mstr_barang");
?>

<?php $no = 1 ?>

<?php foreach ($getData as $result) : ?>
<tr>
    <td>
        <p class="text-xs font-weight-bold mb-0 text-center"><?= $no++; ?></p>
    </td>
    <td>
        <p class="text-xs font-weight-bold mb-0 text-center">
            <?= $result['nama_brng']; ?></p>
    </td>
    <td>
        <p class="text-xs font-weight-bold mb-0 text-center">
            <?= $result['stok_brng']; ?></p>
    </td>
    <td>
        <p class="text-xs font-weight-bold mb-0 text-center">
            <?= $result['jens_brng']; ?></p>
    </td>
    <td class="align-middle text-center text-sm">
        <?php if ($result['status'] == '1') : ?>
        <span class="badge badge-sm bg-gradient-success">Aktif</span>
        <?php else : ?>
        <span class="badge badge-sm bg-gradient-danger">Non Aktif</span>
        <?php endif; ?>
    </td>
    <td class="align-middle text-center">
        <a href="" class="text-secondary font-weight-bold text-xs edit_data" data-bs-toggle="modal"
            data-bs-target="#modalEdit" id="<?= $result['id_barang'] ?>">
            Edit
        </a>
    </td>
</tr>
<?php endforeach ?>