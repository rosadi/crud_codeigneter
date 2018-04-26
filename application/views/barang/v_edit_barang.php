<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Data Barang</title>
    <link rel="stylesheet" href="">
</head>
<body>

    <h4>INPUT DATA BARANG</h4>

    <!-- notifikasi alert required -->
    <?=  validation_errors();  ?>
    <!-- notifikasi alert required -->
    <?= form_open('Barang/edit/'.$data_barang['id_barang']); ?>

    <table>
        <tr>
            <td>NAMA BARANG</td>
            <td>:</td>
            <td><input type="text" name="nama_barang" value="<?= $data_barang['nama_barang'] ?>"></td>
        </tr>
        <tr>
            <td>JENIS BARANG</td>
            <td>:</td>
            <td><input type="text" name="jenis_barang" value="<?= $data_barang['jenis_barang'] ?>"></td>
        </tr>
        <tr>
            <td>HARGA BARANG</td>
            <td>:</td>
            <td><input type="text" name="harga_barang" value="<?= $data_barang['harga_barang'] ?>"></td>
        </tr>
        <tr>
            <td colspan="3" align="right"><input type="submit" name="" value="UPDATE"></td>
        </tr>
    </table>

    <?= form_close(); ?>
</body>
</html>