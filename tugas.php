<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<title></title>
<body>
<form action="tugas3.php" method='post'>
<h2>form registrasi</h2>
<pre>
isi data dibawah ini:
nim                 :<input type='text' name='nim'>
nama                :<input type='text' name='nama'>
jenis kelamin       :<input type='radio' name='kelamin' value='laki-laki '>laki laki  <input type='radio' name='kelamin' value='perempuan'>perempuan
tanggal lahir       :<input type='date' name='tanglah'>
tempat lahir        :<input type='text' name='temlah'>
jurusan             :<input type='text' name='jurusan'>
tahun masuk         :<select name='tahunmasuk'>
    <option value='-pilih-'>
    <option value='2022'>2022 
    <option value='2023'>2023 
    <option value='2024'>2024 
    <option value='2025'>2025 
</select>
<p>
    <input type='submit' value='submit'>
</p>
</body>
</html>