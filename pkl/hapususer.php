<?php
require 'koneksi.php';
$id = $_GET["id"];

if(hapususer($id) > 0 ){
    echo "
       <script>
        alert('data berhasil dihapus!');
        document.location.href = 'anggota.php';
       </script>
       ";
   } else {
       echo " <script>
       alert('data gagal dihapus!');
       document.location.href = 'anggota.php';
      </script>";
   }


?>