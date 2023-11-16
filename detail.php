<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    $id_terima =  $_GET['id'];
    include 'koneksi.php';
    $query = mysqli_query($conn, "SELECT `id`, `title`, `poster`, `genre`, `rating` FROM `movies` where id=$id_terima;");
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_array($query)) {
           $title = $data['title'];
           $poster = $data['poster'];
           $genre = $data['genre'];
           $rating = $data['rating'];
        }
    }
    ?>
    <h2><?php echo $title ?></h2>
    <img src="<?php echo $poster ?>" alt="" width="285" height="437">
    
</body>
</html>