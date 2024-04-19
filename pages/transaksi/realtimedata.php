<?php

include '../../config/koneksi.php';
$getData = mysqli_query($conn, "SELECT id_transaksi,id_user,id_brng,jml_pnjm,nama,keterangan,nm_brng,status FROM transaksi");
?>

<?php $no = 1 ?>

<?php foreach ($getData as $result) : ?>
<tr>
    <td>
        <p class="text-xs font-weight-bold mb-0 text-center"><?= $no++; ?></p>
    </td>
    <td>
        <p class="text-xs font-weight-bold mb-0 text-center">
            <?= $result['nm_brng']; ?></p>
    </td>
    <td>
        <p class="text-xs font-weight-bold mb-0 text-center">
            <?= $result['jml_pnjm']; ?></p>
    </td>
    <td>
        <p class="text-xs font-weight-bold mb-0 text-center">
            <?= $result['nm_brng']; ?></p>
    </td>
    <td class="align-middle text-center text-sm">
    <?php if ($result['status'] == 'Success') : ?>
        <span class="badge badge-sm bg-gradient-success">Aktif</span>
    <?php elseif ($result['status'] == 'padding') : ?>
        <span class="badge badge-sm bg-gradient-info">Padding</span>
    <?php else : ?>
        <span class="badge badge-sm bg-gradient-danger">Non Aktif</span>
    <?php endif; ?>
    </td>
    <td class="align-middle text-center">
        <a href="" class="text-secondary font-weight-bold text-xs edit_data p-2" data-bs-toggle="modal"
            data-bs-target="#modalEdit" id="<?= $result['id_transaksi'] ?>">
            Edit
        </a>
        <a href="delet.php?id_barang=<?= $result['id_transaksi'] ?>" class="text-danger font-weight-bold text-xs delete_data"
            >
            Delete
        </a>
    </td>
</tr>
<?php endforeach ?>