<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h3>
    <?= validation_errors(); ?>
</h3>
<form method="post" action="<?= base_url('buku/save') ?>">
<input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>"/>
<div>
    <label></label>
    <div>
    <h3>Tambah/Ubah Buku</h3>
    </div>
</div>
<div>
    <label>ID</label>
    <div>
        <label><?= $id ?></label>
    </div>
</div>

<div>
    <label>ISBN</label>
    <div>
        <input type="text" name="isbn" id="isbn" value="<?= $isbn ?>" required/>
    </div>
</div>

<div>
    <label>Judul</label>
    <div>
        <input type="text" name="judul" id="judul" value="<?= $judul ?>" required/>
    </div>
</div>

<div>
    <label>Pengarang</label>
    <div>
        <input type="text" name="pengarang" id="pengarang" value="<?= $pengarang ?>" required/>
    </div>
</div>

<div>
    <label>Tanggal Rilis</label>
    <div>
        <input type="tel" name="tanggal_rilis" id="tanggal_rilis" value="<?= $tanggal_rilis ?>" required/>
    </div>
</div>

<div>
    <label>Jml Halaman</label>
    <div>
        <input type="text" name="jumlah_halaman" id="jumlah_halaman" value="<?= $jumlah_halaman ?>" required/>
    </div>
</div>

<div>
    <label>Sinopsis</label>
    <div>
        <textarea rows="10" cols="100" name="sinopsis" id="sinopsis" required><?= $sinopsis ?></textarea> 
    </div>
</div>

<div>
    <input type="button" value="Cancel" onclick="history.back()" />
    <input type="submit" value="Simpan" />
</div>

</form>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>