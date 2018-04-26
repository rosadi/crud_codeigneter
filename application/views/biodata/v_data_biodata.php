<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Biodata</title>
    <link rel="stylesheet" href="">
</head>
<body>

    <h4>DATA BIODATA MAHASISWA</h4>

    <a href="<?= base_url() ?>" title="">HOME</a><br><br>

    <table border="1" cellpadding="5" cellspacing="1">
        <tr>
            <td>NO</td>
            <td>ID</td>
            <td>NAMA LENGKAP</td>
            <td>JENIS KELAMIN</td>
            <td>HOBI</td>
            <td>JURUSAN</td>
            <td><a href="<?= base_url('biodata/tambah') ?>">ADD BARANG</a></td>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($data_biodata as $data): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['id'] ?></td>
            <td><?= $data['nama_lengkap'] ?></td>
            <td><?= $data['jenis_kelamin'] ?></td>
            <td><?= $data['hobi'] ?></td>
            <td><?= $data['jurusan'] ?></td>
            <td>
                <a href="<?= base_url('biodata/edit/'.$data['id']) ?>">EDIT</a> |  
                <a href="<?= base_url('biodata/delete/'.$data['id']) ?>">DELETE</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    
</body>
</html>