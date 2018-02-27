<?php

session_start();

	if (empty($_SESSION['users'])) {
		echo "<script>alert('Akses Di TOLAK!!');document.location='index.php'</script>";
	}

include('connection.php');

if(isset($_SESSION['login'])) {

}

$stmt = $connection->prepare("SELECT * FROM users WHERE id=?");
$stmt->execute([$_SESSION['users']]);
$users = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
	<h1><?php echo "Selamat Datang " . $users['nama']; ?></h1>
	<a href="logout.php" name="logout" class="btn btn-primary">Logout</a>	
	</div>
</body>
</html>