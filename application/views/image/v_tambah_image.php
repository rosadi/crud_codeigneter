<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="">
</head>
<body>
    
    <h4>Tambah Data Gambar</h4>
    <a href="<?= base_url('crud_image') ?>" title="">Back</a><br><br>

    <?= form_open_multipart('crud_image/tambah') ?>

    <table cellpadding="5" cellspacing="1">
        <tr>
            <td>NAMA FILE</td>
            <td>:</td>
            <td><input type="text" name="nama_file" value="" autofocus="autofocus" ></td>
        </tr>
        <tr>
            <td>FILE</td>
            <td>:</td>
            <td><input type="file" name="filefoto" id="image-upload" required/></td>
        </tr>
        <tr>
            <td><input type="submit" name="save" value="SAVE"></td>
        </tr>
    </table>

    <?= form_close(); ?>
    <?= validation_errors() ?>
</body>
</html>