<html>
    <head>
        <title>Pendaftaran Poliklinik</title>  
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <center>
        <h1>POLIKLINIK UAD</h1>  
        <div id="wrap">
            <p>Mohon isi form pendaftaran di bawah ini dengan benar sesuai data diri anda</p>
            <form method="post" action="proses.php" onsubmit="return validasi()" name="fdaftar">
                
                    
                    <input type="text" name="nama" placeholder="Masukkan Nama Lengkap *" autofocus="" autocomplete="off">
                    <div id="nonama"></div>
                
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
                    <div id="nokeluhan"></div>
                
                    <input type="text" name="nik" autocomplete="off"  placeholder="Masukkan NIK Anda *">
                    <div id="nonik"></div>
                
                    <input type="text" name="hp" id="hp" autocomplete="off" placeholder="Masukkan No. Handphone Anda *">
                    <div id="nohp"></div><br>
                
                    <input type="submit" value="Submit"><input type="reset" value="Reset">
            </form>
            </div>
        </center>
    </body>
</html>
<script type="text/javascript">
    var nama=document.forms["fdaftar"]["nama"];
    var tanggal=document.forms["fdaftar"]["tanggal"];
    var keluhan=document.forms["fdaftar"]["keluhan"];
    var nik=document.forms["fdaftar"]["nik"];
    var hp=document.forms["fdaftar"]["hp"];

    var nonama=document.getElementById("nonama");
    var notanggal=document.getElementById("notanggal");
    var nokeluhan=document.getElementById("nokeluhan");
    var nonik=document.getElementById("nonik");
    var nohp=document.getElementById("nohp");

    nama.addEventListener("blur", verifikasinama, true);
    tanggal.addEventListener("blur", verifikasitanggal, true);
    keluhan.addEventListener("blur", verifikasikeluhan, true);
    nik.addEventListener("blur", verifikasinik, true);
    hp.addEventListener("blur", verifikasihp, true);
 
    function validasi(){
        if(nama.value==""){
            nama.style.border= "1px solid red";
            nonama.textContent="Wajib Diisi";
            nama.focus();
            return false;
        }
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
        if(nik.value==""){
            nik.style.border= "1px solid red";
            nonik.textContent="Wajib Diisi";
            nik.focus();
            return false;
        }
        if(hp.value==""){
            hp.style.border= "1px solid red";
            nohp.textContent="Wajib Diisi";
            hp.focus();
            return false;
        }
    }

    function verifikasinama(){
        if(nama.value != ""){
            nama.style.border= "1px solid #5E6E66";
            nonama.innerHTML="";
            return true;
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
    function verifikasinik(){
        if(nik.value != ""){
            nik.style.border= "1px solid #5E6E66";
            nonik.innerHTML="";
            return true;
        }
    }
    function verifikasihp(){
        if(hp.value != ""){
            hp.style.border= "1px solid #5E6E66";
            nohp.innerHTML="";
            return true;
        }
    }
</script>