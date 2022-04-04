<?php require_once("koneksi.php"); 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<div class="sidebar-wrapper">
            <div class="sidebar-menu">
                <div class="sidebar-nama">
                   <?php echo $_SESSION['nama'] ?>
                </div>
                <p>Dashboard</p>
                <a href="#"><div class="sidebar-list">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fas fa-house"></i>&nbsp;&nbsp;
                    Beranda
                </div></a>
                <a href="profil.php"><div class="sidebar-list">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa-solid fa-user"></i>&nbsp;&nbsp;
                    Profil
                </div></a>
                <a href="AdminBeranda.php"><div class="sidebar-list">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa-solid fa-user-group"></i>&nbsp;&nbsp;
                    Client
                </div></a>
                <a href="anggota.php"><div class="sidebar-list">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa-solid fa-image-portrait"></i>&nbsp;&nbsp;
                    Pengguna
                </div></a>
                <a href="logout.php"><div class="sidebar-footer">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp;
                    Log Out
                </div></a>
            </div>
        </div>

        <div class="header-wrapper">
            <div class="header">
                <div class="logo-wrap">
                <img src="./images/logo.png">
                HLP Consultant
                </div>
            </div>
        </div>