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

    <div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>

    <?php echo form_open("crud_image/tambah", array('enctype'=>'multipart/form-data')); ?>

    <table cellpadding="5" cellspacing="1">
        <tr>
            <td>Deskripsi</td>
            <td><input type="text" name="input_deskripsi" value="<?php echo set_value('input_deskripsi'); ?>"></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td><input type="file" name="input_gambar"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Simpan"></td>
        </tr>
    </table>

    <?= form_close(); ?>
    <?= validation_errors() ?>
</body>
</html>