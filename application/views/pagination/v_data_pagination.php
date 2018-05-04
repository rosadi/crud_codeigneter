<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Pagination</title>
    <link rel="stylesheet" href="">
</head>
<body>
    
<h4>DATA PAGINATION</h4>
<a href="<?= base_url() ?>">HOME</a><br><hr>
<table border="1" cellpadding="5" cellspacing="1">
    <tr>
        <td>NO</td>
        <td>ID</td>
        <td>NAMA</td>
        <td>ALAMAT</td>
        <td>PEKERJAAN</td>
    </tr>
    <?php $no = $this->uri->segment('3') + 1 ?>
    <?php foreach ($data_pagination as $data): ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $data->id; ?></td>
        <td><?php echo $data->nama ?></td>
        <td><?php echo $data->alamat ?></td>
        <td><?php echo $data->pekerjaan ?></td>
    </tr>
    <?php endforeach ?>
</table>
<br>
<?php echo $halaman ?>

</body>
</html>