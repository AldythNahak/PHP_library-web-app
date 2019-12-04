<?php
	include "koneksi.php";
	//Kirimkan Variabel
	$Book_Tittle					= $_POST['Book_Tittle'];
	$Author_Name					= $_POST['Author_Name'];
	$Publisher_Name				= $_POST['Publisher_Name'];
	//input data ke table mahasiswa dalam database akademik
	$input	="INSERT INTO Book (Book_Tittle, Author_Name, Publisher_Name)
			VALUES ('$Book_Tittle','$Author_Name','$Publisher_Name')";
	$query_input =mysqli_query($Open,$input);
		if ($query_input) {
	//Jika Sukses
	?>
		<script language="JavaScript">
			alert('Book add Succesfuly!');
			document.location='index.php';
		</script>
	<?php
	}
	else {
	//Jika Gagal
	echo "Error input to Database, do again the proses!";
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
