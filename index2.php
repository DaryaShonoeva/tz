<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <title> Progect Add </title>

  </head>
  <body>
      <form class="needs-validation" novalidate="" method="post" action="databace.php">
          <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2" focusable="false" aria-hidden="true"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
          <strong>Product Add</strong>
        </a>
        <input type="submit" value="Save" class="navbar-toggler" data-toggle="collapse" onclick="window.location.href='/index.php'" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <button class="navbar-toggler" type="button" data-toggle="collapse" onclick="window.location.href='/index.php'" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span>Cancel</span>
        </button>
      </div>
    </div>
    <div class="col-md-8 order-md-1">

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="sku">SKU</label>
            <input type="text" class="form-control" id="sku1" name="sku" placeholder="" value="" required="">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name1" name="name" placeholder="" value="" required="">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="price">Price ($)</label>
            <input type="text" class="form-control" id="price1" name="price" placeholder="" value="" required="">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
    </div>

    <select class="custom-select d-block w-100" id="toggle-forms" name="toggle-forms" required="">
              <option value="">Choose...</option>
              <option value="1">DVD</option>
              <option value="2">Book</option>
              <option value="3">Furniture</option>
    </select>
    <div class="row1" id="form-1">
      <div class="col-md-6 mb-3">
        <label for="price">Size (Mb)</label>
        <input type="text" class="form-control" id="size" name="size" placeholder="" value="" required="">
        <div class="invalid-feedback">
          Valid first name is required.
        </div>
      </div>
    </div>
    <div class="row1" id="form-2">
      <div class="col-md-6 mb-3">
        <label for="price">Weight (Kg)</label>
        <input type="text" class="form-control" id="weight" name="weight" placeholder="" value="" required="">
        <div class="invalid-feedback">
          Valid first name is required.
        </div>
      </div>
    </div>
    <div class="row1" id="form-3">
      <div class="col-md-6 mb-3">
        <label for="price">H</label>
        <input type="text" class="form-control" id="h" name="h" placeholder="" value="" required="">
        <div class="invalid-feedback">
          Valid first name is required.
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="price">W</label>
        <input type="text" class="form-control" id="w" name="w" placeholder="" value="" required="">
        <div class="invalid-feedback">
          Valid first name is required.
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="price">L</label>
        <input type="text" class="form-control" id="l" name="l" placeholder="" value="" required="">
        <div class="invalid-feedback">
          Valid first name is required.
        </div>
      </div>
    </div>

    <script>
    $('#toggle-forms').on('change', function() {
      $('.row1').hide();
      $('#form-'+this.value).show();
    }).change();
    </script>

    </form>
  </body>
