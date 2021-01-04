include "data.php";
$dvd = mysqli_query($link,"SELECT * FROM `dvd`");
$book = mysqli_query($link,"SELECT * FROM `book`");
$furniture = mysqli_query($link,"SELECT * FROM `Furniture`");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title> Progect </title>


  </head>
  <body>
       <form action="delete.php" method="post">
             <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2" focusable="false" aria-hidden="true"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
          <strong>Product List</strong>
        </a>

        <button class="navbar-toggler" type="button" onclick="window.location.href='/index2.php'"data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span>Add</span>
        </button>

         <input type="submit" name="delete" onclick="window.location.href='/index.php'" id="delete" class="navbar-toggler" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation" value="Delete">

      </div>
    </div>
    <div class="d-flex flex-wrap">


      <?php
      while ($tovar = mysqli_fetch_assoc($dvd)) { ?>
        <div class="card mb-4 shadow-sm">
          <div class="card-body">

            <input type="checkbox" name="checkbox[]" value="<?php echo 'dvd_' . $tovar['SKU']; ?>">

            <ul class="list-unstyled mt-3 mb-4">
              <li><?php echo $tovar['SKU'] ?></li>
              <li><?php echo $tovar['Name'] ?></li>
              <li><?php echo $tovar['Price'] ?></li>
              <li>Size: <?php echo $tovar['Size'] ?></li>
            </ul>
          </div>
        </div>
      <?php
      } ?>

      <?php
      while ($tovar = mysqli_fetch_assoc($book)) { ?>
        <div class="card mb-4 shadow-sm">
          <div class="card-body">

            <input type="checkbox" name="checkbox[]" value="<?php echo 'book_' . $tovar['SKU']; ?>">

            <ul class="list-unstyled mt-3 mb-4">
              <li><?php echo $tovar['SKU'] ?></li>
              <li><?php echo $tovar['Name'] ?></li>
              <li><?php echo $tovar['Price'] ?></li>
              <li>Weight: <?php echo $tovar['Weight'] ?></li>
            </ul>
          </div>
        </div>
      <?php
      } ?>
      <?php
      while ($tovar = mysqli_fetch_assoc($furniture)) { ?>
        <div class="card mb-4 shadow-sm">
          <div class="card-body">

            <input type="checkbox" name="checkbox[]" value="<?php echo 'Furniture_' . $tovar['SKU']; ?>">

            <ul class="list-unstyled mt-3 mb-4">
              <li><?php echo $tovar['SKU'] ?></li>
              <li><?php echo $tovar['Name'] ?></li>
              <li><?php echo $tovar['Price'] ?></li>
              <li>Dimension: <?php echo $tovar['H'] ?> x <?php echo $tovar['W'] ?> x <?php echo $tovar['L'] ?></li>
            </ul>
          </div>
        </div>
      <?php
      } ?>




      </div>
        </form>

  </body>
  </html>
