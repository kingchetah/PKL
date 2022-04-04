<?php 
$koneksi = mysqli_connect("localhost","root","","db_test");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
function query($query){
	global $koneksi;
    $result = mysqli_query($koneksi, $query);
	$rows = [];
	while($data = mysqli_fetch_assoc($result)){
		$rows[] = $data;
	}
	return $rows;
}

function tambah($info){
	global $koneksi;

	// ambil data tiap elemen pada form
    $wajibpajak = htmlspecialchars($info["wajibpajak"]);
    $npwp = htmlspecialchars($info["npwp"]);
    $notelp = htmlspecialchars($info["notelp"]);
    $catatan = htmlspecialchars($info["catatan"]);

	$query = "INSERT INTO klien
	VALUES
	('', '$wajibpajak', '$npwp', '$notelp', '$catatan')
	";

	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}
function tambahuser($info){
	global $koneksi;

	// ambil data tiap elemen pada form
    $nama = htmlspecialchars($info["nama"]);
    $username = htmlspecialchars($info["username"]);
    $password = htmlspecialchars($info["password"]);
	$level = htmlspecialchars($info["level"]);
	$notelp = htmlspecialchars($info["notelp"]);

    

	$query = "INSERT INTO user
	VALUES
	('', '$nama', '$username', '$password', '$level', '$notelp')
	";

	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function tambahkonsul($info){
	global $koneksi;

	// ambil data tiap elemen pada form
    $id_klien = ($info["id_klien"]);
    $konsul_ke = ($info["konsul_ke"]);
    $hari_tanggal = ($info["hari_tanggal"]);
    $Tujuan = ($info["Tujuan"]);
    $hasil_konsul = ($info["hasil_konsul"]);
    $catatan_konsul = ($info["catatan_konsul"]);

	$query = "INSERT INTO konsultasi
	VALUES
	('','$id_klien', '$konsul_ke', '$hari_tanggal', '$Tujuan', '$hasil_konsul', '$catatan_konsul')
	";

	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}
function hapus($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM klien WHERE id = $id");
	return mysqli_affected_rows($koneksi);
}
function hapususer($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM user WHERE id = $id");
	return mysqli_affected_rows($koneksi);
}
function hapuskonsul($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM konsultasi WHERE $id = id_konsul");
	return mysqli_affected_rows($koneksi);
}


function ubah($info){
	global $koneksi;

	// ambil data tiap elemen pada form
	$id = $info["id"];
    $wajibpajak = htmlspecialchars($info["wajibpajak"]);
    $npwp = htmlspecialchars($info["npwp"]);
    $notelp = htmlspecialchars($info["notelp"]);
    $catatan = htmlspecialchars($info["catatan"]);

	$query = "UPDATE klien SET 
				wajibpajak = '$wajibpajak',
				npwp = '$npwp',
				notelp = '$notelp',
				catatan = '$catatan'
				WHERE id = $id
				";
var_dump($query);
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function ubahuser($info){
	global $koneksi;

	// ambil data tiap elemen pada form
	$id = $info["id"];
	
    $nama = htmlspecialchars($info["nama"]);
    $username = htmlspecialchars($info["username"]);
    $password = htmlspecialchars($info["password"]);


	$query = "UPDATE user SET 
				nama = '$nama',
				username = '$username',
				password = '$password'
				WHERE id = $id
				";

	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}
function ubahkonsul($info){
	global $koneksi;

	// ambil data tiap elemen pada form
	$id = $info["id_konsul"];
	
    $konsul_ke = htmlspecialchars($info["konsul_ke"]);
    $hari_tanggal = htmlspecialchars($info["hari_tanggal"]);
    $Tujuan = htmlspecialchars($info["Tujuan"]);
    $hasil_konsul = htmlspecialchars($info["hasil_konsul"]);
    $catatan_konsul = htmlspecialchars($info["catatan_konsul"]);


	$query = "UPDATE konsultasi SET 
				konsul_ke = '$konsul_ke',
				hari_tanggal = '$hari_tanggal',
				Tujuan = '$Tujuan',
				hasil_konsul = '$hasil_konsul',
				catatan_konsul = '$catatan_konsul'
				WHERE id_konsul = $id
				";
	var_dump($query);
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}


function cari($keyword){
	if(empty($keyword)){
		echo "
        <script>
            document.location.href = 'AdminBeranda.php';
        </script>
        ";
	}else{
	$mencari = htmlspecialchars($keyword);
	$query = "SELECT * FROM klien 
				WHERE wajibpajak LIKE'%$mencari%'
				";

				return query($query);
	}
}

?>








