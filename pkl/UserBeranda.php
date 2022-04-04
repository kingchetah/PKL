<?php
        require "koneksi.php";
        session_start();
        $klien = query("SELECT * FROM klien");
        if (isset($_POST["cari"]) ){
            $klien = cari($_POST["keyword"]);
        }
        ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <style>
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
</head>
<body>
    <ul>
        <li><a href="AdminBeranda.php">Klien</a></li>
        <li><a href="konsultasi.php">Konsultasi</a></li>
    </ul>
    <p>Selamat Datang <b><?php echo $_SESSION['nama']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
    <a href="tambahklien.php">Tambah Data Klien</a>
    <a href="logout.php">Logout</a>
    <form action="" method="POST">
        <input type="text" name="keyword" id="search" size="40" autofocus 
        placeholder="Masukan nama wajibpajak" autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Aksi</td>
                <td>Nama</td>
                <td>NPWP</td>
                <td>No Telpon</td>                
            </tr>
        </thead>
        
        <?php $no = 1; ?>
        <?php
        foreach( $klien as $data ) :
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td>
                    <a href="ubahklien.php?id=<?= $data['id']; ?>">ubah |</a>
                    <a href="hapusklien.php?id=<?= $data['id']; ?>" onclick="
                    return confirm('yakin?');">hapus</a>
                </td>
                <td><a href="previewklien.php?id=<?= $data['id']; ?>"><?= $data['wajibpajak']; ?></a></td>
                <td><?= $data['npwp']; ?></td>
                <td><?= $data['notelp']; ?></td>
            </tr>
       
    <?php endforeach; ?>
    </table>
    
    <?php

 
// mengambil data klien
$data_klien = mysqli_query($koneksi,"SELECT * FROM klien");
 
// menghitung data klien dan menampilkan
$jumlah_klien = mysqli_num_rows($data_klien);
?>
<p>Jumlah Data Klien : <b><?php echo $jumlah_klien; ?></b></p>

</body>
</html>