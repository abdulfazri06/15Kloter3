
<?php
require_once 'func.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Read book </title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/bootstrap-3.3.7-dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/bootstrap-3.3.7-dist/css/jumbotron-narrow.css">
    <script src="<?php echo BASE_URL; ?>/bootstrap-3.3.7-dist/js/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </head>

  <body>
    <div class='container'>
      <div class='col-sm-1'></div>
      <div class='col-sm-10'>
        <div class='panel panel-info'>
          <div class='panel-heading'>Form Input book </div>
          <div class='panel-body'>
          <form action='func.php' method='POST'>
          
              <div class="form-group">
                <label for="name"> name:</label>
                <input type="text" class="form-control" id="name" name='name' placeholder='name'>
              </div>
              <div class="form-group">
                <label for="category_id"> category_id:</label>
                <input type="text" class="form-control" id="category_id" name='category_id' placeholder='category_id'>
              </div>
              <div class="form-group">
                <label for="writer_id"> writer_id:</label>
                <input type="text" class="form-control" id="writer_id" name='writer_id' placeholder='writer_id'>
              </div>
              <div class="form-group">
                <label for="Publication_year"> Publication_year:</label>
                <input type="text" class="form-control" id="Publication_year" name='Publication_year' placeholder='Publication_year'>
              </div>
              <div class="form-group">
                <label for="img"> img:</label>
                <input type="file" class="form-control" id="img" name='img' placeholder='img'>
              </div><input type='submit' name='insert' value='Save' class='btn btn-sm btn-primary'>
          </form>
          </div>
        </div>
      </div>
      <div class='col-sm-1'></div>
    </div>
  </body>
</html>

