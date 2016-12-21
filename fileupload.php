<?php
define("UPLOAD_DIR", "/afs/cad.njit.edu/u/g/e/ge45/public_html/");
if (!empty($_FILES["file"])) {
    $file = $_FILES["file"];
    if ($file["error"] !== UPLOAD_ERR_OK) {
        echo "<p>There was an error.</p>";
        exit;
    }
$name = preg_replace("/[^A-Z0-9._-]/i", "_", $file["name"]);
$i = 0;
    $p = pathinfo($name);
    while (file_exists(UPLOAD_DIR . $name)) {
        $i++;
        $name = $p["filename"] . "-" . $i . "." . $p["extension"];
    }
    $s = move_uploaded_file($file["tmp_name"],
        UPLOAD_DIR . $name);
    if (!$s) { 
        echo "<p>File could not be saved.</p>";
        exit;
    }
    chmod(UPLOAD_DIR . $name, 0644);
}
?>
<html>
<body>
<form action="" method="post" enctype="multipart/form-data"> 
 <input type="file" name="file">
 <br>
 <input type="submit" value="Upload File">
</form>
</body>
</html>
