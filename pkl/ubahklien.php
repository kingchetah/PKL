<?php 
require 'koneksi.php';

// ambil data di URL
$id = $_GET["id"];

// query data berdasarkan id
$client = query("SELECT * FROM klien WHERE id = $id")[0];
$id_data = $client["id"];
// cek apakah tombol submit udah ditekan atau belum
if( isset($_POST["submit"]) ){

    // cek berhasil ubah atau tidak
    if(ubah($_POST) > 0 ) {
        echo "
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'previewklien.php?id= $id_data';
        </script>
        ";
    } else {
        echo " <script>
        alert('data gagal diubah!');
        document.location.href = 'AdminBeranda.php';
        </script>";
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
        <link rel="stylesheet" href="./css/change-client-data-style.css">
    </head>
<body>
<?php include("sidebar-admin.php") ?>
   
<div class="main-content-wrapper">
            <div class="main-content">
                <div class="form-wrapper">
                    <div class="form-header">
                        &ensp;&ensp;
                        Ubah Data Klien
                    </div>
        <div class="form-content">         
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $client["id"]; ?>">
       
                Wajib Pajak : <br>
                <input type="text" class="input" name="wajibpajak" id="wajibpajak" value="<?= $client["wajibpajak"]; ?>" required> <br> <br>
        
                NPWP<br>
                <input type="text" class="input" name="npwp" id="npwp" value="<?= $client["npwp"]; ?>"> <br> <br>
           
                Nomor Telepon<br>
                <input type="text" class="input" name="notelp" id="notelp" value="<?= $client["notelp"]; ?>"> <br> <br>
                
           
                Catatan<br>
                <textarea rows="6" class="input-lg" id="catatan" name="catatan"  placeholder=""><?= $client["catatan"]; ?></textarea> <br> <br>
                <div class="button-wrapper">
                            <a href="#"><div class="button-batal">Batal</div></a>
                            <button type="submit" class="button-submit" name="submit">Submit</button>
                           
                        </div>
                
            
    </form>
</body>
</html>