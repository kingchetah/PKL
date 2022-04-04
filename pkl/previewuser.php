<?php
include "koneksi.php";
$wajibpajak = $_GET['wajibpajak'];
$sql = 'SELECT * FROM klien';
$stmt = $koneksi->prepare($sql);
$stmt->execute([':wajibpajak'=> $wajibpajak]);
$data = $stmt->fetch();
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="#" method="POST">
                    <input type="hidden" name="id_klien" value="<?php echo $data->id; ?>" required />
                    <div class="form-group">
                        <label for="inputNama">Nama</label>
                        <input type="text" class="form-control" id="inputNama" name="inpNama" value="<?php echo $data->wajibpajak; ?>" placeholder=""></input>
                    </div>
                    <div class="form-group">
                        <label for="inputNpwp">NPWP</label>
                        <input type="text" class="form-control" id="inputNpwp"  name="inpNpwp" value="<?php echo $data->npwp; ?>" placeholder=""></input>
                    </div>
                    <div class="form-group">
                        <label for="inputNo">Nomor Telpon</label>
                        <input type="text" class="form-control" id="inputNo"  name="inpNo" value="<?php echo $data->notelp; ?>" placeholder=""> </input>
                    </div>
                  <br>
                    <div class="form-group">
                        <label for="inputCat">Catatan</label>
                        <textarea class="form-control"rows="6" id="inputCat" name="inpC" value="<?php echo $data->catatan; ?>" placeholder="">
                        </textarea>
                    </div>
                   
                </form>
</body>
</html>