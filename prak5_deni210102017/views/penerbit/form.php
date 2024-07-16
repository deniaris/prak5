<?php include APPPATH . 'views/fragment/header.php'; ?>
<?php include APPPATH . 'views/fragment/menu.php'; ?>

<div class="container mt-4">
    <h3><?= validation_errors(); ?></h3>
    <form method="post" action="<?= base_url('penerbit/save') ?>">
        <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>" />
        <div class="mb-3">
            <h3><?= isset($id) ? 'Edit Penerbit' : 'Tambah Penerbit' ?></h3>
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Penerbit</label>
            <input class="form-control" type="text" name="nama" id="nama" value="<?= $nama ?>" required />
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input class="form-control" type="text" name="alamat" id="alamat" value="<?= $alamat ?>" required />
        </div>

        <div class="mb-3">
            <label for="telpon" class="form-label">No Telfon</label>
            <input class="form-control" type="text" name="telpon" id="telpon" value="<?= $telpon ?>" required />
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="text" name="email" id="email" value="<?= $email ?>" required />
        </div>

        <div class="mb-3">
            <input type="button" value="Cancel" onclick="history.back()" class="btn btn-secondary" />
            <input type="submit" value="Simpan" class="btn btn-primary" />
        </div>
    </form>
</div>

<?php include APPPATH . 'views/fragment/footer.php'; ?>