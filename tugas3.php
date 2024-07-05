<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$kelamin=$_POST['kelamin'];
$tanglah=$_POST['tanglah'];
$temlah=$_POST['temlah'];
$jurusan=$_POST['jurusan'];
$tahunmasuk=$_POST['tahunmasuk'];
?>
<table border=1>
<tr><td>nim</td><td><?php echo $nim?></td></tr>
<tr><td>nama</td><td><?php echo $nama?></td></tr>
<tr><td>jenis kelamin</td><td><?php echo $kelamin?></td></tr>
<tr><td>tanggal lahir</td><td><?php echo $tanglah?></td></tr>
<tr><td>tempat lahir</td><td><?php echo $temlah?></td></tr>
<tr><td>jurusan</td><td><?php echo $jurusan?></td></tr>
<tr><td>tahun masuk</td><td><?php echo $tahunmasuk?></td></tr>
<a href="tugas.php">
</table>
</body>
</html>