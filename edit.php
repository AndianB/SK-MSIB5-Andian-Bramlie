<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>

<body>
    <div class="text-bg-primary p-3">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="index.php"><img class="logo" src="images/logo1.png" alt="" width="119" height="58"></a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <button type="button" class="btn btn-danger"><a class="nav-link active" aria-current="page"
                                href="movies.php">Back</a></button>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include 'koneksi.php';
                $movie = mysqli_query($conn, "SELECT * from movies where id='$_GET[id]'");
               
                while ($b = mysqli_fetch_array($movie)) {
                    
                    $title = $b["title"];
                    $trailer = $b["trailer"];
                    $synopsis = $b["synopsis"];
                    $date = $b["release_date"];
                    $genre = $b["genre"];
                    $rating = $b["rating"];
                    $poster = $b["poster"];
                }
                ?>
                <center>
                    <h1>Edit Data Movie</h1>
                </center>
                <img src="<?php echo $poster?>" width="100">
                <h1><?php echo $title?></h1>
                <hr>
                <form class="row g-3" action="proses_edit.php?id=<?php echo $_GET['id']?>" method="post" enctype="multipart/form-data">
                    <div class="col-md-12">
                        <label for="movieTitle" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="<?php echo $title ?>">
                    </div>
                    <div class="col-md-12">
                        <label for="moviePoster" class="form-label">Poster</label>
                        <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
                    </div>
                    <div class="col-12">
                        <label for="movieTrailer" class="form-label">Trailer</label>
                        <input type="text" class="form-control" name="trailer"
                            placeholder="https://www.youtube.com/..." value="<?php echo $trailer ?>">
                    </div>
                    <div class="col-md-12">
                        <label for="moviesynopsisS" class="form-label">Synopsis</label>
                        <textarea type="text" class="form-control" name="synopsis" rows="3"> <?php echo $synopsis ?></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="movieRelease" class="form-label">Release Date</label>
                        <input type="date" class="form-control" name="release_date" value="<?php echo $date ?>">
                    </div>
                    <div class="col-md-4">
                        <label for="movieGenre" class="form-label">Genre</label>
                        <select class="form-select" name="genre">
                            <option >-</option>
                            <option <?php if($genre=="Action"){echo "selected";}?>>Action</option>
                            <option <?php if($genre=="Horor"){echo "selected";}?>>Horor</option>
                            <option <?php if($genre=="Thriller"){echo "selected";}?>>Thriller</option>
                            <option <?php if($genre=="Fantasy"){echo "selected";}?>>Fantasy</option>
                            <option <?php if($genre=="Romance"){echo "selected";}?>>Romance</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="movieRating" class="form-label">Rating</label>
                        <input type="text" class="form-control" name="rating" value="<?php echo $rating ?>">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="Submit" value="Simpan">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>