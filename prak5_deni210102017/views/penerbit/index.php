<?php include APPPATH . 'views/fragment/header.php'; ?>
<?php include APPPATH . 'views/fragment/menu.php'; ?>

<div class="container mt-4">
    <h1>Daftar Penerbit</h1>
    <div class="d-flex justify-content-end mb-3">
        <a class="btn btn-success btn-sm" href="<?= base_url("penerbit/form") ?>">Tambah</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($records as $data) {
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><?= $data['telpon'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-primary btn-sm"
                                href="<?= base_url("penerbit/detail/{$data['id']}") ?>">Detail</a>
                            <a class="btn btn-warning btn-sm" href="<?= base_url("penerbit/form/{$data['id']}") ?>">Edit</a>
                            <a class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                href="<?= base_url("penerbit/hapus/{$data['id']}") ?>">Hapus</a>
                        </div>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php include APPPATH . 'views/fragment/footer.php'; ?>