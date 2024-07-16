<?php include APPPATH . 'views/fragment/header.php'; ?>
<?php include APPPATH . 'views/fragment/menu.php'; ?>

<div class="container mt-4">
    <h1>Daftar Buku</h1>
    <div class="d-flex justify-content-end mb-3">
        <a class="btn btn-success btn-sm" href="<?= base_url("buku/form") ?>">Tambah</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tgl Rilis</th>
                <th>Jml Hal</th>
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
                    <td><?= $data['judul'] ?></td>
                    <td><?= $data['pengarang'] ?></td>
                    <td><?= $data['tanggal_rilis'] ?></td>
                    <td><?= $data['jumlah_halaman'] ?></td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-primary btn-sm" href="<?= base_url("buku/detail/{$data['id']}") ?>">Detail</a>
                            <a class="btn btn-warning btn-sm" href="<?= base_url("buku/form/{$data['id']}") ?>">Edit</a>
                            <a class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                href="<?= base_url("buku/hapus/{$data['id']}") ?>">Hapus</a>
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