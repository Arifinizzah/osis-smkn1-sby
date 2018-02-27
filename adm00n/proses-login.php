<?php

session_start();
require('connection.php');

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$cek_username = stripslashes(strip_tags(htmlspecialchars($username), ENT_QUOTES));
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$cek_password = stripslashes(strip_tags(htmlspecialchars($password), ENT_QUOTES));

if(empty($cek_username) && empty($cek_password)) {

	echo "<script>alert('Mohon di isi dahulu!');document.location='index.php'</script>";

	}

	if(isset($cek_username) && isset($cek_password)) {

	$stmt = $connection->prepare('SELECT * FROM users WHERE username = :username');
	$stmt->bindParam(':username', $username);
	$stmt->execute();
	$result = $stmt->fetch(PDO::FETCH_ASSOC);

	if($cek_username != $result['username']) {
		echo "<script>alert('Username / Password Salah!');document.location='index.php'</script>";
	}

	if($stmt->rowCount() > 0) {
		$verif_password = password_verify($cek_password, $result['password']);

			if($verif_password) {
				$_SESSION['users'] = $result['id'];
				$_SESSION['login'];
				echo "<script>alert('Login Sukses');document.location='beranda.php'</script>";
			}

			else {

				echo "<script>alert('Username / Password Salah!');document.location='index.php'</script>";

			}
		}
	}

?>
