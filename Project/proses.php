<html>
<head>
    <title>Pendaftaran Poliklinik</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php
    $name=$_REQUEST['nama'];
    $tanggal=$_REQUEST['tanggal'];
    $poli=$_REQUEST['poli'];
    $keluhan=$_REQUEST['keluhan'];
    $nik=$_REQUEST['nik'];
    $hp=$_REQUEST['hp'];

    $conn = mysqli_connect('localhost','root','','poliklinik') or die ("Koneksi Ke Database Gagal");

    $mysqli= " INSERT INTO pasien (nama,tanggal,poli,keluhan,nik,hp) VALUES ('$name','$tanggal','$poli','$keluhan','$nik','$hp')";

    $result = mysqli_query($conn,$mysqli);

   
 
    echo "<center><h1>POLIKLINIK UAD</h1>";
    echo "<br><br><br><br>";
    echo "<p>Data Berhasil Disimpan.</p>";
    echo "<a href='utama.php'>Kembali Ke Halaman Awal</a></center>";
    mysqli_close($conn);
?>
</body>
</html>