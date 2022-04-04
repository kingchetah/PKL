<?php 
require 'koneksi.php';

// ambil data di URL
$id = $_GET["id"];

// query data berdasarkan id
$client = query("SELECT * FROM klien WHERE id = $id")[0];
$konsul = query("SELECT * FROM konsultasi inner join  klien ON konsultasi.id_klien=klien.id WHERE id_klien='$id'");

// cek apakah tombol submit udah ditekan atau belum
if( isset($_POST["submit"]) ){

    // cek berhasil ubah atau tidak
   if(ubah ($_POST) > 0 ) {
       echo "
       <script>
        alert('data berhasil diubah!');
        document.location.href = 'AdminBeranda.php';
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
        <link rel="stylesheet" href="./css/preview-client-style.css">
    </head>
<body>

<?php include("sidebar-admin.php") ?>
      <!-- <a href="hapuskonsul.php?id_konsul=<?= $data["id_konsul"]; ?>"onclick="
                    return confirm('yakin?');">Hapus</a>  
        |  <a href="ubahkonsul.php?id_konsul=<?= $data["id_konsul"]; ?>">Ubah</a><br> -->
         <!-- Main Content -->
         <div class="main-content-wrapper">
            <div class="main-content">
                <div class="bot-border">    
                <h1>Konsultasi</h1>
                </div>
                <div class="form-wrapper">
                    <div class="form-header"></div>
                    <div class="form-content">
                      <input type="hidden" name="id" value="<?= $client["id"]; ?>">
                        Wajib Pajak : 
                         <label for=""><?= $client ["wajibpajak"];  ?></label> <br><br>
                        NPWP : 
                        <label for=""><?= $client ["npwp"];  ?></label> <br><br>
                        Nomor Telepon :
                        <label for=""><?= $client ["notelp"];  ?></label> <br><br>
                        Catatan : <br>
                        <textarea rows="6" class="input-lg" id="catatan" name="catatan"  placeholder=""><?= $client["catatan"]; ?></textarea> <br> <br>
                        <!-- <textarea class="input-lg" row="6" onfocus="this.blur()" readonly="readonly" placeholder="<?= $client ["catatan"];  ?>"></textarea><br> -->
                        

                        <div class="button-wrapper">
                            <a href="ubahklien.php?id=<?= $client["id"]; ?>"><div class="button-edit"><i class="fa-solid fa-pen-to-square"></i>&nbsp;Ubah</div></a>
                        </div>
                    </div>
                </div>

                <div class="btn-outer-wrapper">
                <a href="tambahkonsul.php?id=<?= $client["id"]; ?>"><div class="button-tambah"><i class="fa-solid fa-square-plus fa-lg"></i>&nbsp;&nbsp;Tambah</div></a>
                <a href="#"><div class="button-hapus"><i class="fa-solid fa-trash-can fa-lg"></i>&nbsp;&nbsp;Hapus</div></a>
                </div><br>

                


      
    
        
        <div class="tabel-wrap">
    <?php 
     foreach ($konsul as $data) : ?>
     <div class="tabel">
     <div class="tabel-header"><a href="previewkonsul.php?id_konsul=<?= $data["id_konsul"]; ?>">Konsul ke : 
        <?= $data['konsul_ke']; ?></a></div>
      
        <div class="tabel-list">Hari/Tanggal</div>
        <div class="tabel-bot"> <?= $data['hari_tanggal']; ?></div>
     </div>
        


     
     <?php endforeach; ?></div>
    <br><br>
    
</body>
</html>