<?php include APPPATH . 'views/fragment/header.php'; ?>
<?php include APPPATH . 'views/fragment/menu.php'; ?>

<div class="container mt-4">
    <h3><?= validation_errors(); ?></h3>
    <form method="post" action="<?= base_url('buku/save') ?>">
        <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>" />
        <div class="mb-3">
            <h3><?= isset($id) ? 'Ubah Buku' : 'Tambah Buku' ?></h3>
        </div>

        <div class="mb-3">
            <label for="id_penerbit" class="form-label">Penerbit</label>
            <select class="form-select" name="id_penerbit" id="id_penerbit" required>
                <?php foreach ($penerbit as $p) { ?>
                    <option value="<?= $p['id'] ?>" <?= $p['id'] == $id_penerbit ? 'selected' : '' ?>>
                        <?= $p['nama_penerbit'] ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input class="form-control" type="text" name="isbn" id="isbn" value="<?= $isbn ?>" required />
        </div>

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input class="form-control" type="text" name="judul" id="judul" value="<?= $judul ?>" required />
        </div>

        <div class="mb-3">
            <label for="pengarang" class="form-label">Pengarang</label>
            <input class="form-control" type="text" name="pengarang" id="pengarang" value="<?= $pengarang ?>"
                required />
        </div>

        <div class="mb-3">
            <label for="tanggal_rilis" class="form-label">Tanggal Rilis</label>
            <input class="form-control" type="text" name="tanggal_rilis" id="tanggal_rilis"
                value="<?= $tanggal_rilis ?>" required />
        </div>

        <div class="mb-3">
            <label for="jumlah_halaman" class="form-label">Jumlah Halaman</label>
            <input class="form-control" type="text" name="jumlah_halaman" id="jumlah_halaman"
                value="<?= $jumlah_halaman ?>" required />
        </div>

        <div class="mb-3">
            <label for="sinopsis" class="form-label">Sinopsis</label>
            <textarea class="form-control" rows="5" name="sinopsis" id="sinopsis" required><?= $sinopsis ?></textarea>
        </div>

        <div class="mb-3">
            <input type="button" value="Cancel" onclick="history.back()" class="btn btn-secondary" />
            <input type="submit" value="Simpan" class="btn btn-primary" />
        </div>
    </form>
</div>

<?php include APPPATH . 'views/fragment/footer.php'; ?>