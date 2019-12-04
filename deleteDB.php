<?php
include "koneksi.php";
include "view_data.php";

$delete = "DELETE FROM Book WHERE Book_ID = $book_id";

if (mysqli_query($Open, $Koneksi)) {
    mysqli_close($Open);
    header('Location: view_data.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
 ?>
