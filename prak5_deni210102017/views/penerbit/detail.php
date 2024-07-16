<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<div class="container mt-4">
    <h1 class="mb-4">Detail Penerbit</h1>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>ID</th>
                <td><?= $id ?></td>
            </tr>
            <tr>
                <th>Nama Penerbit</th>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?= $alamat ?></td>
            </tr>
            <tr>
                <th>No Telepon</th>
                <td><?= $telpon ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= $email ?></td>
            </tr>
        </tbody>
    </table>
    <a href="#" onclick="history.back()" class="btn btn-secondary mt-3">Kembali</a>
</div>
<?php
include APPPATH . 'views/fragment/footer.php';
?>