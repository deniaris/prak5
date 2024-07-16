<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<div class="container mt-4">
    <h1 class="mb-4">Detail Buku</h1>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>ID</th>
                <td><?= $id ?></td>
            </tr>
            <tr>
                <th>ISBN</th>
                <td><?= $isbn ?></td>
            </tr>
            <tr>
                <th>Judul</th>
                <td><?= $judul ?></td>
            </tr>
            <tr>
                <th>Pengarang</th>
                <td><?= $pengarang ?></td>
            </tr>
            <tr>
                <th>Tanggal Rilis</th>
                <td><?= $tanggal_rilis ?></td>
            </tr>
            <tr>
                <th>Jumlah Halaman</th>
                <td><?= $jumlah_halaman ?></td>
            </tr>
            <tr>
                <th>Sinopsis</th>
                <td><textarea class="form-control" rows="10" readonly><?= $sinopsis ?></textarea></td>
            </tr>
        </tbody>
    </table>
    <a href="#" onclick="history.back()" class="btn btn-secondary mt-3">Kembali</a>
</div>
<?php
include APPPATH . 'views/fragment/footer.php';
?>