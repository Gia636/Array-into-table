<?php
$target_dir = "/afs/cad.njit.edu/u/g/e/ge45/public_html/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
<html>
<body>
if (file_exists($target_file)) {
    echo "Please change the name of your file.";
    $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Your file is too large.";
    $uploadOk = 0;
}


if ($uploadOk == 0) {
    echo "Error. Your file was not uploaded.";

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "There was an error uploading your file.";
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
</body>
</html>