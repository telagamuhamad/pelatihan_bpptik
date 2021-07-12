# Simple Calculator

## Deskripsi Proyek
Proyek ini merupakan aplikasi kalkulator sederhana yang dapat menyelesaikan operasi perhitungan matematika meliputi
* Penjumlahan
* Pengurangan
* Perkalian
* Pembagian

## Requirement
Kebutuhan dari project ini adalah
* Bootstrap 4 (CDN)
* External CSS file
* PHP 7

## Cara Penggunaan
Berikut adalah cara penggunaan aplikasi ini :
* Pastikan Anda sudah menginstall php dan webserver (XAMPP/WAMP) pada _device_ Anda
* Jalankan program dengan URL localhost/_nama folder_/Tugas6_MuhammadTelagaNurHandiNindita.php
* Isikan angka pada _input field_ yang tersedia
* Klik tombol __Hitung!__
* Hasil akan ditampilkan di _box_ yang tersedia

## Tampilan Aplikasi
![Screenshot (2005)](https://user-images.githubusercontent.com/36910894/125291492-ab3ebd00-e34b-11eb-98f2-299220f752fe.png)

## Penjelasan Source Code
1. Membuat fungsi untuk kalkulator
``` php
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
```
2. Import CSS dan Bootstrap 4
```html
<head>
	<meta charset="utf-8">
	<title>Simple Calculator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- CSS only -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
```
3. Membuat tampilan _form_ dan tombol
```html
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
```
4. Membuat fungsi untuk menampilkan hasil perhitungan
```php
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
           
           
