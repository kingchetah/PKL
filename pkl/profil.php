<?php
        require "koneksi.php";
        session_start();
        $user= $_SESSION['username'];
        $profil ="SELECT password, notelp FROM user WHERE username = $user";
        if($_SESSION['level']==""){
            header("location:index.php?pesan=gagal");
        }
        if(!isset($_SESSION["login"])){
            header("Location: login.php");
            exit;
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
        <link rel="stylesheet" href="./css/profile-style.css">

        <script>
            function myFunction() {
              var x = document.getElementById("myInput");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            }
        </script>
    </head>

    <body>
    <?php include("sidebar-admin.php") ?>


        <!-- Main Content -->
        <div class="main-content-wrapper">
            <div class="main-content">
                <div class="bot-border">    
                <h1>Profil</h1>
                </div>
                <div class="form-wrapper">
                    <div class="form-header"></div>
                    <div class="form-content">
                        Nama<br>
                        <input type="text" class="input" onfocus="this.blur()" readonly="readonly" placeholder="<?php echo $_SESSION['nama']; ?>"><br><br>
                        Username<br>
                        <input type="text" class="input" onfocus="this.blur()" readonly="readonly" placeholder="<?php echo $_SESSION['username']; ?>"/><br><br>
                        Password<br>
                        <input type="password" class="input"  readonly="readonly"  id="myInput"/><br><br>
                        
                            <input type="checkbox" onclick="myFunction()" class="show">
                            <div class="show-container">Tampilkan Password</div>                       
                        
                        <div class="button-wrapper">
                            <a href="#"><div class="button-edit"><i class="fa-solid fa-pen-to-square"></i>&nbsp;Edit</div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </body>
</html>