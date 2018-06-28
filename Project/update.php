<?php
     $conn = mysqli_connect('localhost','root','','poliklinik') or die ("Koneksi Ke Database Gagal");

     $id = $_GET['id'];
     $pasien = mysqli_query($conn,"SELECT * FROM pasien WHERE id = '$id'");
     $row = mysqli_fetch_array($pasien);
?>

<html>
<head>
    <title>Pendaftaran Poliklinik</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center>
    <h1>POLIKLINIK UAD</h1>

    <div id="wrap">
    <form action="gantibaru.php" method="post" onsubmit="return validasi()" name="fupdate">
        <input type="hidden" value="<?php echo "$row[id]"; ?>" name="id">      
            
        <input type="text" name="tanggal" autocomplete="off" placeholder="Tanggal rencana berobat *">
                <div id="notanggal"></div>
            
                <select name="poli">
                    <option value="-">-Pilih Poliklinik Tujuan-</option>
                    <option value="Poli Anak">Poli Anak</option>
                    <option value="Poli Bedah">Poli Bedah</option>
                    <option value="Poli Bedah Anak">Poli Bedah Anak</option>
                    <option value="Poli Gigi">Poli Gigi</option>
                    <option value="Poli Jantung">Poli Jantung</option>
                    <option value="Poli Jiwa">Poli Jiwa</option>
                    <option value="Poli Kulit dan Kelamin">Poli Kulit dan Kelamin</option>
                    <option value="Poli KB dan Imunisasi">Poli KB dan Imunisasi</option>
                    <option value="Poli Kebidanan dan Penyakit Kandungan">Poli Kebidanan dan Penyakit Kandungan</option>
                    <option value="Poli Mata">Poli Mata</option>
                    <option value="Poli Paru">Poli Paru</option>
                    <option value="Poli Psikologi">Poli Psikologi</option>
                    <option value="Poli Penyakit Dalam">Poli Penyakit Dalam</option>
                    <option value="Poli Fisioterapi">Poli Fisioterapi</option>
                    <option value="Poli Saraf">Poli Saraf</option></select>
            
                <textarea name="keluhan" cols="35" rows="5" placeholder="Apa Keluhan Anda ? *"></textarea>
                <div id="nokeluhan"></div><br>
            
            <input type="submit" value="Submit"><input type="reset" value="Reset">
    </div>
    </form>
</center>
</body>
</html>
<script type="text/javascript">
    var tanggal=document.forms["fupdate"]["tanggal"];
    var keluhan=document.forms["fupdate"]["keluhan"];

    var notanggal=document.getElementById("notanggal");
    var nokeluhan=document.getElementById("nokeluhan");
    
    tanggal.addEventListener("blur", verifikasitanggal, true);
    keluhan.addEventListener("blur", verifikasikeluhan, true);
   
   function validasi(){
        if(tanggal.value==""){
            tanggal.style.border= "1px solid red";
            notanggal.textContent="Wajib Diisi";
            tanggal.focus();
            return false;
        }
        if(keluhan.value==""){
            keluhan.style.border= "1px solid red";
            nokeluhan.textContent="Wajib Diisi";
            keluhan.focus();
            return false;
        }
    }

    function verifikasitanggal(){
        if(tanggal.value != ""){
            tanggal.style.border= "1px solid #5E6E66";
            notanggal.innerHTML="";
            return true;
        }
    }
    function verifikasikeluhan(){
        if(keluhan.value != ""){
            keluhan.style.border= "1px solid #5E6E66";
            nokeluhan.innerHTML="";
            return true;
        }
    }
</script>