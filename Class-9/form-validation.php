<?php
if (isset($_POST['subBtn']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    if (empty($name)) {
        $errName = "Name is required";
    } elseif (!preg_match("/^[a-zA-Z. ]$/", $name)) {
        $errName = "Only Alphabets and white space allowed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- bootstrap 5.3 css cdn  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <div class="row min-vh-100 d-flex">
    <div class="col-md-6 m-auto border rounded shadow p-4">
      <form action="<?=$_SERVER["PHP_SELF"];?>" method="post">
        <div class="mb-3 form-floating">
        <input type="text" name="name" placeholder="Your Name" class="form-control <?=isset($errName) ? "is-invalid" : null;?>" >
        <label for="" class="">Your Name</label>
        <div class="invalid-feedback">
          <?=$errName ?? null;?>
        </div>
        </div>
        <input type="submit" value="Submit" name="subBtn" class="btn btn-dark btn-lg">
      </form>
    </div>
  </div>
</div>

<!-- bootstrap 5.3 js cdn -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>