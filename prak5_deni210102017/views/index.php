<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>Daftar Buku</h1>
<a href="<?= base_url("buku/form")?>">Tambah</a>
<table> 
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Tgl Rilis</th>
        <th>Jml Hal</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no=1;
    foreach($records as $idx => $data){
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['judul'] ?></td>
            <td><?= $data['pengarang'] ?></td>
            <td><?= $data['tanggal_rilis'] ?></td>
            <td><?= $data['jumlah_halaman'] ?></td>
            <td>
                <a href="<?= base_url("buku/detail/{$data['id']}")?>">Detail</a>
                <a href="<?= base_url("buku/form/{$data['id']}")?>">Ubah</a>
                <a onclick="return confirm('menghapus data?')" href="<?= base_url("buku/hapus/{$data['id']}")?>">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>