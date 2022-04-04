<?php 
require 'koneksi.php';
$id = $_GET["id"];

// cek apakah tombol submit udah ditekan atau belum
if( isset($_POST["submit"]) ){
   
    // cek berhasil tambah atau tidak
   if(tambahkonsul($_POST) > 0 ) {
       echo "
       <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'previewklien.php?id= $id';
       </script>
       ";
    
   } else {
     echo "
    <script>
     alert('data gagal ditambahkan!');
     document.location.href = 'AdminBeranda.php';
    </script>
    ";
    
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
                        Tambah Konsultasi
                    </div>
                    <div class="form-content">
    <form action="" method="post">
       
        <input type="hidden" name="id_klien" id="id_klien" value='<?= $id; ?>'>    
          
                Konsul ke :<br>
                <input type="text" class="input" name="konsul_ke" id="konsul_ke" required> <br>
            
                Tanggal<br>
                <input type="date" class="input" name="hari_tanggal" id="hari_tanggal"><br>
                
           
                Tujuan<br>
                <input type="text" class="input" name="Tujuan" id="Tujuan"><br>
                
            
                Hasil Konsultasi<br>
                <textarea rows="6" class="input-lg" id="hasil_konsul" name="hasil_konsul"  placeholder=""></textarea><br>
           
                Catatan<br>
                <textarea rows="6" class="input-lg" id="catatan_konsul" name="catatan_konsul"  placeholder=""></textarea><br>
           
                <div class="button-wrapper">
                            <button type=" batal"class="button-batal">Batal</button>
                           <button type="submit" name="submit" class="button-submit">Submit</button>
                        </div>
    </form>
</div>
</div>
</div>
</body>
</html>