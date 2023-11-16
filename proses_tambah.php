<?php 
include 'koneksi.php';

// get variable from form input
$title = $_POST["title"];
$trailer = $_POST["trailer"];
$synopsis = $_POST["synopsis"];
$date = $_POST["release_date"];
$genre = $_POST["genre"];
$rating = $_POST["rating"];

// Upload Proses
$target_dir = "posters/"; // path directory image akan di simpan
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yg akan di simpan
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
    echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
} else {
    echo "Sorry, there was an error uploading your file.<br>";
}

$result = mysqli_query($conn, "INSERT INTO `movies` (`title`, `trailer`, `synopsis`, `release_date`, `genre`, `rating`, `poster`) VALUES ('$title', '$trailer', '$synopsis', '$date', '$genre', '$rating', '$target_file');");

header("Location:movies.php");