<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>Detail Buku</h1>
<table>
<div>
    <label>ID</label>
    <div>
        <label><?= $id ?></label>
    </div>
</div>
<div>
    <label>ISBN</label>
    <div>
        <label><?= $isbn ?></label>
    </div>
</div>

<div>
    <label>Judul</label>
    <div>
        <label><?= $judul ?></label>
    </div>
</div>

<div>
    <label>Pengarang</label>
    <div>
        <label><?= $pengarang ?></label>
    </div>
</div>

<div>
    <label>Tanggal Rilis</label>
    <div>
        <label><?= $tanggal_rilis ?></label>
    </div>
</div>

<div>
    <label>Jml Halaman</label>
    <div>
        <label><?= $jumlah_halaman ?></label>
    </div>
</div>

<div>
    <label>Sinopsis</label>
    <div>
        <textarea rows="10" cols="100" name="sinopsis" id="sinopsis"><?= $sinopsis ?></textarea> 
    </div>
</div>

</table>

<a href='#' onclick="history.back()">Back</a>

<?php
include APPPATH . 'views/fragment/footer.php' ;
?>