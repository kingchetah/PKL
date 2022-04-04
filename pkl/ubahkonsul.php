<?php 
require 'koneksi.php';

// ambil data di URL
$id = $_GET["id_konsul"];

// query data berdasarkan id
$data = query("SELECT * FROM konsultasi WHERE id_konsul = $id")[0];
$id_data = $data["id_konsul"];

// cek apakah tombol submit udah ditekan atau belum
if( isset($_POST["submit"]) ){

    // cek berhasil ubah atau tidak
    if(ubahkonsul($_POST) > 0 ) {
        echo "
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'previewkonsul.php?id_konsul= $id_data';
        </script>
        ";
    } else {
        // echo " <script>
        // alert('data gagal diubah!');
        // document.location.href = 'AdminBeranda.php';
        // </script>";
    }


}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
		<link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/add-consul-style.css">
    </head>

    <body>
    <?php include("sidebar-admin.php") ?>
   
   <div class="main-content-wrapper">
               <div class="main-content">
                   <div class="form-wrapper">
                       <div class="form-header">
                           &ensp;&ensp;
                           Ubah Data Konsultasi
                       </div>
   
                       <div class="form-content">         
    <form action="" method="post">
        <input type="hidden" name="id_konsul" value="<?= $data["id_konsul"];; ?>">
       
                Konsul ke : <br>
                <input type="text" name="konsul_ke" class="input" id="konsul_ke" value="<?= $data["konsul_ke"]; ?>" required> <br> <br>
        
                Tanggal : <br>
                <input type="date" name="hari_tanggal" class="input" id="hari_tanggal" value="<?= $data["hari_tanggal"]; ?>"> <br> <br>
           
                Tujuan : <br>
                <input type="text" name="Tujuan" class="input" id="Tujuan" value="<?= $data["Tujuan"]; ?>"> <br><br>

                Hasil Konsultasi : <br>
                <textarea rows="6" class="input-lg" id="hasil_konsul" name="hasil_konsul"  placeholder=""><?= $data["hasil_konsul"]; ?></textarea><br><br>
                Catatan<br>
                <textarea rows="6" class="input-lg" id="catatan_konsul" name="catatan_konsul"  placeholder=""><?= $data["catatan_konsul"]; ?></textarea><br>
                <div class="button-wrapper">
                            <a href="#"><div class="button-batal">Batal</div></a>
                            <button type="submit" class="button-submit" name="submit">Submit</button>
                           
                        </div>
                
            
    </form>
    <!-- <form action="" method="post">
        <input type="hidden" name="id_konsul" value="<?= $data["id_konsul"]; ?>">
        <ul>
            <li>
                <label for="konsul_ke">Konsul ke : </label>
                <input type="text" name="konsul_ke" id="konsul_ke" value="<?= $data["konsul_ke"]; ?>" required>
            </li>
            <li>
                <label for="hari_tanggal">Tanggal : </label>
                <input type="date" name="hari_tanggal" id="hari_tanggal" value="<?= $data["hari_tanggal"]; ?>">
            </li>
            <li>
                <label for="Tujuan">Tujuan : </label>
                <input type="text" name="Tujuan" id="Tujuan" value="<?= $data["Tujuan"]; ?>">
                
            </li>
            <li>
                <label for="hasil_konsul">Hasil Konsul : </label>
                <textarea rows="6" id="hasil_konsul" name="hasil_konsul"  placeholder=""><?= $data["hasil_konsul"]; ?></textarea>
            </li>
            <li>
                <label for="catatan_konsul">Catatan Konsul : </label>
                <textarea rows="6" id="catatan_konsul" name="catatan_konsul"  placeholder=""><?= $data["catatan_konsul"]; ?></textarea>
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form> -->
</body>
</html>