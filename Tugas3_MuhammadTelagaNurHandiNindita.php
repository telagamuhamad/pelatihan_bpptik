<?php
//menggunakan perulangan for untuk membuat perulangan 1-100
	for ($i=1; $i <= 100 ; $i++) { 
//membuat kondisi berupa operasi modulo untuk menentukan ganjil dan genap		
		if($i % 2 == 0){
			echo $i." adalah Bilangan Genap";
		}else{
			echo $i." adalah Bilangan Ganjil";
		}
		echo "<br>";
	}
?>

<!-- Nama : Muhammad Telaga Nur Handi Nindita
Kelas : Junior Web Developer
BPPTIK-G7-2021-JWD4 -->