<?php

error_reporting(0);
include('connection.php');

	$name = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
	$password_hash = password_hash($password, PASSWORD_DEFAULT);


if (isset($_POST['daftar'])) {
	$daftar = $connection->prepare("INSERT INTO users(nama,username,password) VALUES(?,?,?)");
	$data = array(
		$name,
		$username,
		$password_hash
		);
	$result = $daftar->execute($data);

	if(!$result) {
		echo "<script>alert('Gagal Daftar!');document.location='daftar.php'</script>";
	} 
	else {
		echo "<script>alert('Daftar Sukses');document.location='login.php'</script>";
	}
}

?>
