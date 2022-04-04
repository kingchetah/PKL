<?php
require 'koneksi.php';
$id = $_GET["id_konsul"];

if(hapuskonsul($id) > 0 ){
    
    echo " <script>";
     echo "   alert('data berhasil dihapus!')";
    echo " document.location.href = 'previewklien.php';";
     echo "   </script> ";
       
   } else {
    echo " <script>";
    echo "   alert('data gagal dihapus!')";
    echo "   </script> ";
   }


?>