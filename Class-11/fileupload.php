<?php
if (isset($_POST["submit"])) {
    $fileName = $_FILES["file"]["name"];
    $fileTempName = $_FILES["file"]["tmp_name"];

    // validation
    $allowed = ["jpg", "jpeg", "png", "gif"];
    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));

    if (empty($fileName)) {
        $errFile = "<span style='color:red;'>Please select a file to upload.</span>";
    } elseif (!in_array($fileActualExt, $allowed)) {
        $errFile = "<span style='color:red;'>Please select a valid file to upload.</span>";
    } else {
        // check dir uploads
        if (!is_dir("uploads")) {
            mkdir("uploads");
        }
        // create new name
        $newFileName = uniqid("", true) . "." . $fileActualExt;

        // move uploaded file
        $fileUpload = move_uploaded_file($fileTempName, "uploads/" . $newFileName);
        if ($fileUpload) {
            echo $crrFile = "<span style='color:green;'> File uploaded successfully</span>";
        } else {
            echo "<span style='color:red;'> Something Went Wrong</span>";
        }
    }
}
?>
<form action="" method ="post" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit" value="upload" name ="submit">
</form>
<?=$errFile ?? null?>

