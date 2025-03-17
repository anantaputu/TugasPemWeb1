<?php

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$nama = $_POST['nama'];
	$nohp = $_POST['nohp'];
	$pesan = $_POST['message'];

	$sql = "INSERT INTO PemWeb1 (nama_user, nmrhp_user, pesan_user) VALUES ('$nama', '$nohp', '$pesan')";

	if ($koneksi->query($sql) === TRUE) {
		echo "Formulir Terisi!";
	} else {
		echo "Error". $sql . "<br>" . $koneksi->error;
	}

	$koneksi->close();
}

?>