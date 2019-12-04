<html>
<head>
	<title>view</title>
</head>
<body>
	<br><font size="4"><center><b>You have got the following books</b></center><font><br>
	<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr bgcolor="#FFA600" height="40">
			<th width="5%">Book ID</th>&nbsp;
			<th width="14%">Book Tittle</th>&nbsp;
			<th width="12%">Author Name</th>&nbsp;
			<th width="25%">Publisher Name</th>&nbsp;
			<th width="2%"</th>&nbsp;
			<th width="2%"</th>&nbsp;
		</tr>

<?php
		include "koneksi.php";


		//view data mahasiswa di dalam database
		$Lihat="SELECT * FROM Book ORDER BY Book_ID";
		$Tampil = mysqli_query($Open,$Lihat);

		while (	$hasil = mysqli_fetch_array ($Tampil)) {
				$book_id						= stripslashes ($hasil['Book_ID']);
				$Book_Tittle				= stripslashes ($hasil['Book_Tittle']);
				$Author_Name				= stripslashes ($hasil['Author_Name']);
				$Publisher_Name			= stripslashes ($hasil['Publisher_Name']);
			{
				$delete = "DELETE FROM Book WHERE Book_ID = $book_id";
	?>
		<tr bgcolor="#DFE6EF">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr align="center" height="40">
			<td><?=$book_id?><div align="center"></div></td>
			<td><?=$Book_Tittle?><div align="center"></div></td>
			<td><?=$Author_Name?><div align="center"></div></td>
			<td><?=$Publisher_Name?><div align="center"></div></td>
			<td><div align="center"><a href="update.php"><input type="button" class="edit" value="Edit"/></a></div></td>
			<td><div align="center"><a href="deleteDB.php"><input type="button" class="delete" value="Delete"/></a></div></td>

		</tr>
		<tr bgcolor="#DFE6EF">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	<?php
			}
		}
	//Tutup koneksi engine MySQL
		mysqli_close($Open);
	?>
	</table>
</body>
</html>
