<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
  <div class="text-bg-primary p-3">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
          aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="index.php"><img class="logo" src="images/logo1.png" alt="" width="119" height="58"></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <button type="button" class="btn btn-info"><a class="nav-link active" aria-current="page"
                href="manager.php">Show Manager</a></button>
            <button type="button" class="btn btn-secondary"><a class="nav-link" aria-current="page"
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
        $query = mysqli_query($conn, "SELECT * FROM `showtimes`AS s
        JOIN `movies` AS m ON `s`.`movie_id` = `m`.`id`
        JOIN `tickets` AS t ON `s`.`ticket_id` = `t`.`id`;");
        ?>
        <center>
          <h1>Show Manager</h1>
        </center>
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
                Theater
              </th>
              <th>
                Start Time
              </th>
              <th>
                End Time
              </th>
              <th>
                Price
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
                    <?php echo $data["theater"] ?>
                  </td>
                  <td>
                    <?php echo $data["start_time"] ?>
                  </td>
                  <td>
                    <?php echo $data["end_time"] ?>
                  </td>
                  <td>
                    <p>Rp.
                      <?php echo $data["price"] ?>
                    </p>
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