<?php
include "koneksi.php";

$Book_Tittle					= $_POST['Book_Tittle'];
$Author_Name					= $_POST['Author_Name'];
$Publisher_Name				= $_POST['Publisher_Name'];
//update data ke table mahasiswa dalam database akademik
$input	="UPDATE siswa SET Book_Tittle =$Book_Tittle, Author_Name = $Author_Name, Publisher_Name = $Publisher_Name  WHERE id=$book_id";
$query_input =mysqli_query($Open,$input);
  if ($query_input) {
//Jika Sukses
?>
  <script language="JavaScript">
    alert('Book add Succesfuly!');
    document.location='update.php';
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
