<html>
<head>
    <title>Pendaftaran Poliklinik</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <center>
    <h1>POLIKLINIK UAD</h1>
<?php
     $id=$_REQUEST['id'];
     $tanggal=$_REQUEST['tanggal'];
     $poli=$_REQUEST['poli'];
     $keluhan=$_REQUEST['keluhan'];
 
     $conn = mysqli_connect('localhost','root','','poliklinik') or die ("Koneksi Ke Database Gagal");
 
     $mysqli= "UPDATE pasien SET tanggal='$tanggal', poli='$poli', keluhan='$keluhan' WHERE id='$id'";
 
     $result = mysqli_query($conn,$mysqli);
 
     echo "<br><br><br><br>";
     echo "<p>Data Berhasil Disimpan.</p>";
     echo "<a href='utama.php'>Kembali Ke Halaman Awal</a></center>";
     mysqli_close($conn);
?> 
</center>
</body>
</html>
