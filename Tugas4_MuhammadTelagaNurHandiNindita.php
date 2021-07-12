<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bintang</title>
</head>
<body>
	<form action="Tugas4_MuhammadTelagaNurHandiNindita.php" method="post">
		Jumlah Bintang
		<input type="number" name="angka" id="angka">
		<br>
		<button type="submit">kirim</button>
	</form>
</body>
</html>

<?php
	if(isset($_POST['angka'])){
		$bintang = $_POST['angka'];
		for ($i=0; $i<=$bintang ; $i++) { 
			for($j=0; $j<$i; $j++){
				echo "* ";
			}
			echo "<br>";
		}
	}
?>

<!-- Nama : Muhammad Telaga Nur Handi Nindita
Kelas : Junior Web Developer
BPPTIK-G7-2021-JWD4 -->