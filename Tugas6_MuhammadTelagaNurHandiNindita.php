<?php
function penjumlahan($x, $y){
	return $hasil = $x + $y;

}

function pengurangan($x, $y){
	return $hasil = $x - $y;
}

function perkalian($x, $y){
	return $hasil = $x * $y;
}

function pembagian($x, $y){
	return $hasil = $x / $y;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Simple Calculator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- CSS only -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<h1>Simple Calculator</h1><br>
	<hr style="background-color: white;">
	<hr style="background-color: white;">
	<h3>Masukkan Angka</h3><br>
	<form method="post" action="Tugas6_MuhammadTelagaNurHandiNindita.php">
		<div class="form-row align-items-center" id="forminput">
			<div class="col-sm-3 my-1">
				<label class="sr-only" for="angka1">Angka Pertama</label>
				<input type="number" class="form-control" name="angka1" placeholder="Angka Pertama">
			</div>
			<div class="col-sm-3 my-1">
				<label class="sr-only" for="angka2">Angka Kedua</label>
				<div class="input-group">
					<input type="number" class="form-control" name="angka2" placeholder="Angka Kedua">
				</div>
			</div>
		</div><br>
		<button type="submit" class="btn btn-primary" name="submit" id="tombol">Hitung!</button>
	</form>
	<?php
	if (isset($_POST['submit'])) {
		$nilai1 = $_POST['angka1'];
		$nilai2 = $_POST['angka2'];
		?>
		<hr style="background-color: white;">
		<table>
			<tr>
				<td>
					<div id="tambah">
						<h5>Penjumlahan</h5><br>
						<hr style="background-color: white;">
						<?php
						echo penjumlahan($nilai1, $nilai2);
						?>
					</div>
				</td>
				<td>
					<div id="kurang">
						<h5>Pengurangan</h5><br>
						<hr style="background-color: white;">
						<?php
						echo pengurangan($nilai1, $nilai2);
						?>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div id="kali">
						<h5>Perkalian</h5><br>
						<hr style="background-color: white;">
						<?php
						echo perkalian($nilai1, $nilai2);
						?>
					</div>
				</td>
				<td>
					<div id="bagi">
						<h5>Pembagian</h5><br>
						<hr style="background-color: white;">
						<?php
						echo pembagian($nilai1, $nilai2);
						?> <?php }?>
					</div>
				</td>
			</tr>
		</table>
	</body>
	</html>