<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Page</title>

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
                        <button type="button" class="btn btn-secondary"><a class="nav-link" aria-current="page"
                                href="manager.php">Show Manager</a></button>
                        <button type="button" class="btn btn-info"><a class="nav-link active" aria-current="page"
                                href="movies.php">Movies</a></button>

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
                $query = mysqli_query($conn, "SELECT * FROM `movies`;");
                ?>
                <center>
                    <h1>Movies Data</h1>
                </center>
                <a class="btn btn-success" style="margin-bottom:5px" href="tambah.php?nama_halaman=NAMA HALAMAN NYA">
                    Add Movie</a>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Poster
                            </th>
                            <th>
                                Title
                            </th>
                            <th>
                                Trailer
                            </th>
                            <th>
                                Genre
                            </th>
                            <th>
                                Release Date
                            </th>
                            <th>
                                Rating
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if (mysqli_num_rows($query) > 0) {
                            $no = 1;
                            while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $data["id"] ?>
                                    </td>
                                    <td> <img src="<?php echo $data["poster"] ?>" width="100"> </td>
                                    <td>
                                        <?php echo $data["title"] ?>
                                    </td>
                                    <td>
                                        <?php echo $data["trailer"] ?>
                                    </td>
                                    <td>
                                        <?php echo $data["genre"] ?>
                                    </td>
                                    <td>
                                        <?php echo $data["release_date"] ?>
                                    </td>
                                    <td>
                                        <?php echo $data["rating"] ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger">
                                            <a class="nav-link" aria-current="page" href="proses_hapus.php?id=<?php echo $data["id"] ?>"> Delete </a></button>
                                        <hr>
                                        <button type="button" class="btn btn-warning">
                                            <a class="nav-link" aria-current="page" href="edit.php?id=<?php echo $data["id"] ?>"> Edit </a></button>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>