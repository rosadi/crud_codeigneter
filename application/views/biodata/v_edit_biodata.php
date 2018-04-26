<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EDIT BIODATA - <?= $data_biodata['nama_lengkap'] ?> </title>
    <link rel="stylesheet" href="">
</head>
<body>

    <h4>EDIT DATA BIODATA</h4>
    <a href="<?= base_url('biodata') ?>" title="">Back</a><br><br>
    
    <?= form_open('biodata/edit/'.$data_biodata['id']) ?>

    <table border="1" cellpadding="5" cellspacing="1">
        <tr>
            <td>NAMA LENGKAP</td>
            <td>:</td>
            <td><input type="text" name="nama_lengkap" value="<?= $data_biodata['nama_lengkap'] ?>"></td>
        </tr>
        <tr>
            <td>JENIS KELAMIN</td>
            <td>:</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="Pria" <?php if ( $data_biodata['jenis_kelamin'] == 'Pria' ) echo "checked='checked'";?> > Pria
                <input type="radio" name="jenis_kelamin" value="Wanita" <?php if ($data_biodata['jenis_kelamin'] == 'Wanita') echo "checked='checked'"; ?> > Wanita
            </td>
        </tr>
        <tr>
            <td>HOBI</td>
            <td></td>
            <td>
                <?php 
                # di hobi explode --------------------------------------------------------------------
                $hobi = explode(", ", $data_biodata['hobi']);
                # print_r($hobi);
                # di hobi explode --------------------------------------------------------------------
                ?>
                <!-- menampilkan data checbox masih error -->
                <input type="checkbox" name="hobi[]" value="hobi1" <?php if( $data_biodata['hobi'] == 'hobi1' ) echo "checked='checked" ?> >HOBI1
                <input type="checkbox" name="hobi[]" value="hobi2" <?php if( $data_biodata['hobi'] == 'hobi2' ) echo "checked='checked" ?> >HOBI2
                <input type="checkbox" name="hobi[]" value="hobi3" <?php if( $data_biodata['hobi'] == 'hobi3' ) echo "checked='checked" ?> >HOBI3
                <input type="checkbox" name="hobi[]" value="hobi4" <?php if( $data_biodata['hobi'] == 'hobi4' ) echo "checked='checked" ?> >HOBI4
                <!-- menampilkan data checbox masih error -->
            </td>

        </tr>
        <tr>
            <td>JURUSAN</td>
            <td>:</td>
            <td>
                <select name="jurusan">
                    <option value="TIK" <?php if( $data_biodata['jurusan'] == 'TIK' ) echo 'selected = "selected"'; ?>>TEKNIK INFORMATIKA</option>

                    <option value="TKJ" <?php if( $data_biodata['jurusan'] == 'TKJ' ) echo 'selected = "selected"'; ?>>TEKNIK KOMPUTER JARINGAN</option>

                    <option value="TPM" <?php if( $data_biodata['jurusan'] == 'TPM' ) echo 'selected = "selected"'; ?>>TEKNIK PERMESINAN</option>
                    option
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="3"><input type="submit" name="save" value="UPDATE"></td>
        </tr>
    </table>
    <?= form_close() ?>
    <?= validation_errors() ?>
</body>
</html>