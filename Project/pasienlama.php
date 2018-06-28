<html>
<head>
    <title>Pendaftaran Poliklinik</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <center>
    <h1>POLIKLINIK UAD</h1>
    <br><br>

    <form action="" method="post">
        <input type="text"  name="cari" autocomplete="off" autofocus placeholder="Masukkan NIK yang ingin dicari"><button type="submit" name="search">Cari</button><br><br>
    </form>
    
    <?php 
        $conn = mysqli_connect('localhost','root','','poliklinik') or die ("Koneksi Ke Database Gagal");
        if(isset($_POST["search"])){
            $cari = $_POST["cari"];
            $sql=mysqli_query($conn, "SELECT * FROM pasien WHERE nik = '$cari'");
            $jumlah=mysqli_num_rows($sql);
            if($jumlah > 0){
                echo " <table border='1' cellspacing='0' cellpadding='10'>
                <tr>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>No. HP</th>
                </tr>";
                
                while($hasilcari = mysqli_fetch_array($sql)){
                    echo " <tr>
                    <td><a href='update.php?id= $hasilcari[id]'> $hasilcari[nama]</td>
                    <td>$hasilcari[nik]</td>
                    <td>$hasilcari[hp]</td>
                </tr>";
                }
            }
            else{
                echo "<p>Maaf, NIK tidak ditemukan</p>";
            }
        }
        mysqli_close($conn);
    ?>
    </center>
</body>
</html>