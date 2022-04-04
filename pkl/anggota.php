<?php
        session_start();
        require "koneksi.php";
        $user = query("SELECT * FROM user");
        ?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/user.css">

        
    </head>

    <body>
    <?php include("sidebar-admin.php") ?>
        <!-- Main Content -->
        <div class="main-content-wrapper">
            <div class="main-content">
                <h1 style="display: inline-block;">Database Pengguna</h1>
                <div class="button-wrapper">
                    <a href="tambahuser.php"><div class="button-tambah"><i class="fa-solid fa-square-plus fa-lg"></i>&nbsp;&nbsp;Tambah</div></a>
                </div><br>

                <table>
                    <tr>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Nama</th>
                      <th>No. Telepon/WA</th>
                      <th>Aksi</th>
                    </tr>
                    <?php $no = 1; ?>
                    <?php
                    foreach( $user as $data ) :
                    ?>
                    <tr>
                      <td><?= $data['username']; ?></td>
                      <td><?= $data['password']; ?></td>
                      <td><?= $data['nama']; ?></td>
                      <td><?= $data['notelp']; ?></td>
                      <td>
                        <a href="ubahuser.php?id=<?= $data['id']; ?>"><div class="button-edit">Edit</div></a>
                        <a href="hapususer.php?id=<?= $data['id']; ?>"onclick="
                    return confirm('yakin?');"><div class="button-hapus">Hapus</div></a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </table>
            </div>
        </div>        
   
   

</body>
</html>