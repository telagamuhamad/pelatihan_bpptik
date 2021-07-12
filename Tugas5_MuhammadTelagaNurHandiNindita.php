<?php
	// Pembuatan fungsi penjumlahan, pengurangan, perkalian, pembagian menggunakan varibel x, y, dan hasil
	function penjumlahan($x, $y){
		$hasil = $x + $y;
		return $hasil;
	}

	function pengurangan($x, $y){
		$hasil = $x - $y;
		return $hasil;
	}

	function perkalian($x, $y){
		$hasil = $x * $y;
		return $hasil;
	}

	function pembagian($x, $y){
		$hasil = $x / $y;
		return $hasil;
	}
// deklarasi nilai variabel a dan b yang akan menjadi value dari x dan y
	$a = 9;
	$b = 3;
//menampilkan bilangan 1 dan 2
	echo "Bilangan 1 = ".$a;
	echo "<br>";
	echo "Bilangan 2 = ".$b;
//menampilkan garis pembatas
	echo "<hr>";
	echo "<hr>";
//memanggil fungsi dan menampilkan hasil
	echo "Hasil penjumlahan adalah : ".penjumlahan($a, $b);
	echo "<br>";
	echo "Hasil pengurangan adalah : ".pengurangan($a, $b);
	echo "<br>";
	echo "Hasil perkalian adalah : ".perkalian($a, $b);
	echo "<br>";
	echo "Hasil pembagian adalah : ".pembagian($a, $b);
?>

<!-- Nama : Muhammad Telaga Nur Handi Nindita
Kelas : Junior Web Developer
BPPTIK-G7-2021-JWD4 -->