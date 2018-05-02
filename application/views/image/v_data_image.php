<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DATA GAMBAR</title>
    <link rel="stylesheet" href="">
</head>
<body>

    <h3>Data GAMBAR</h3>
    <a href="<?= base_url() ?>" title="">HOME</a><br><br>

    <table border="1" cellpadding="5" cellspacing="1">
        <tr>
            <td>NO</td>
            <td>ID</td>
            <td>NAMA GAMBAR</td>
            <td>GAMBAR</td>
            <td>UKURAN FILE</td>
            <td>NAMA FILE</td>
            <td>TIPE FILE</td>
            <td><a href="<?= base_url('crud_image/tambah') ?>" title="">TAMBAH GAMBAR</a></td>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($data_gambar as $data): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['id'] ?></td>
                <td><?= $data['deskripsi'] ?></td>
                <td><img src="<?= base_url('images/'.$data['nama_file']) ?>" width='100' height='100'></td>
                <td><?= $data['ukuran_file'] ?></td>
                <td><?= $data['nama_file'] ?></td>
                <td><?= $data['tipe_file'] ?></td>
                <td align="center">
                    <a href="<?= base_url('crud_image/edit/'.$data['id']) ?>" title="">EDIT</a> |
                    <a href="<?= base_url('crud_image/delete/'.$data['id']) ?>" title="">DELETE</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>


</body>
</html>