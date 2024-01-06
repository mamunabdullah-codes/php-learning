<?php

function clean($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (isset($_POST['sub123']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean($_POST['name']);
    $email = clean($_POST['email']);
    if (empty($name)) {
        $errName = "Name is required";
    } elseif (!preg_match("/^[a-zA-Z. ]*$/", $name)) {
        $errName = "Only Alphabets and white space allowed";
    } else {
        $crrName = $name;
    }
    if (empty($email)) {
        $errEmail = "Email is required";
    } elseif (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $email)) {
        $errEmail = "Invalid Email";
    } else {
        $crrEmail = $email;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Validation</title>
  <!-- bootstrap css cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="row min-vh-100 d-flex">
    <div class="col-md-6 m-auto border rounded shadow p-4">
      <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
        <div class="mb-3 form-floating ">
          <input type="text" placeholder="Enter Name" name="name" value= "<?=$name ?? null;?>" class="form-control <?=isset($errName) ? 'is-invalid' : null?> <?=isset($crrName) ? 'is-valid' : null;?>">
          <label for="" class="form-label">Enter Name</label>
          <div class="invalid-feedback">
            <?=isset($errName) ? $errName : null;?>
          </div>
          <div class="valid-feedback ">
          <?=$crrName ?? null;?>
          </div>
        </div>
        <div class="mb-3 form-floating ">
          <input type="text" placeholder="Enter Email" name="email" value="<?=$email ?? null;?>" class="form-control <?=isset($errEmail) ? 'is-invalid' : null?> <?=isset($crrEmail) ? 'is-valid' : null;?> ">
          <label for="">Enter Email</label>
          <div class="invalid-feedback">
            <?=$errEmail ?? null;?>
          </div>
          <div class="valid-feedback">
            <?=$crrEmail ?? null;?>
          </div>
        </div>
        <input type="submit" class="btn btn-dark btn-lg" name="sub123">
    </form>
</div>

<!-- bootstrap js cdn -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
