<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Barang</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h4>Data Barang</h4>
    
    <a href="<?= base_url('Welcome') ?>" title="">HOME</a>
    <!-- notifikasi  -->
    <u><h4><?php echo $this->session->flashdata('pesan'); ?></h4></u>
    <!-- notifikasi -->

    <table border="1" cellpadding="5" cellspacing="1">
        <tr>
            <td>NO</td>
            <td>ID BARANG</td>
            <td>NAMA BARANG</td>
            <td>JENIS BARANG</td>
            <td>HARGA BARANG</td>
            <td align="center"><a href="<?= base_url('barang/tambah_barang') ?>">TAMBAH</a></td>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($data_barang as $data): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['id_barang'] ?></td>
            <td><?= $data['nama_barang'] ?></td>
            <td><?= $data['jenis_barang'] ?></td>
            <td><?= $data['harga_barang'] ?></td>
            <td>
                <a href="<?= base_url('barang/edit/'.$data['id_barang']) ?>" title="">EDIT</a> |
                <a href="<?= base_url('barang/delete/'.$data['id_barang']) ?>" title="">DELETE</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>