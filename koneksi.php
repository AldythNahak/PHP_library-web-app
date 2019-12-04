<?php
	$Open = mysqli_connect("localhost","root","");
		if (!$Open){
		die ("MySQL Error !<br>");
		}
	$Koneksi = mysqli_select_db($Open,"672017081_672017207");
	//	if (!$Koneksi){
	//	die ("DBase Error !");
	//	}
		//echo "Connected";
?>
