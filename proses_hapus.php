<?php 
include 'koneksi.php';

$result = mysqli_query($conn, "DELETE from movies where `id` = '$_GET[id]'");

header("Location:movies.php");

?>