<?php 
include 'koneksi.php';
date_default_timezone_set('Asia/Jakarta');

// get variable from form input
$title = $_POST["title"];
$trailer = $_POST["trailer"];
$synopsis = $_POST["synopsis"];
$date = $_POST["release_date"];
$genre = $_POST["genre"];
$rating = $_POST["rating"];

// Upload Proses
if($_FILES["fileToUpload"]["size"]!=0){   // Jika browse image di tekan maka $_FILES akan terisi
    $target_dir = "posters/"; // path directory image akan di simpan
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yg akan di simpan
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
        echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
        $result = mysqli_query($conn, "UPDATE `movies` set `title` = '$title', `trailer` = '$trailer', `synopsis` = '$synopsis', `release_date` = '$date', `genre` = '$genre', `rating` = '$rating', `poster`= '$target_file' where `id` = '$_GET[id]'");
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
}

$result = mysqli_query($conn, "UPDATE `movies` set `title` = '$title', `trailer` = '$trailer', `synopsis` = '$synopsis', `release_date` = '$date', `genre` = '$genre', `rating` = '$rating' where `id` = '$_GET[id]'");

header("Location:movies.php");