<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TAMBAH BIODATA</title>
    <link rel="stylesheet" href="">
</head>
<body>
    
    <h4>INPUT DATA BIODATA</h4>
    <a href="<?= base_url('biodata') ?>" title="">Back</a><br><br>
    
    <?= form_open('biodata/tambah') ?>
    <table border="1" cellpadding="5" cellspacing="1">
        <tr>
            <td>NAMA LENGKAP</td>
            <td>:</td>
            <td><input type="text" name="nama_lengkap"></td>
        </tr>
        <tr>
            <td>JENIS KELAMIN</td>
            <td>:</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="Pria"> Pria
                <input type="radio" name="jenis_kelamin" value="Wanita"> Wanita
            </td>
        </tr>
        <tr>
            <td>HOBI</td>
            <td></td>
            <td>
                <input type="checkbox" name="hobi[]" value="hobi 1">HOBI 1
                <input type="checkbox" name="hobi[]" value="hobi 2">HOBI 2
                <input type="checkbox" name="hobi[]" value="hobi 3">HOBI 3
                <input type="checkbox" name="hobi[]" value="hobi 4">HOBI 4
            </td>
        </tr>
        <tr>
            <td>JURUSAN</td>
            <td>:</td>
            <td>
                <select name="jurusan">
                    <option value="TIK">TEKNIK INFORMATIKA</option>
                    <option value="TKJ">TEKNIK KOMPUTER JARINGAN</option>
                    <option value="TPM">TEKNIK PERMESINAN</option>
                    option
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="3"><input type="submit" name="save" value="SAVE"></td>
        </tr>
    </table>
    <?= form_close() ?>
    <?= validation_errors() ?>
</body>
</html>