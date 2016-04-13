<?php
session_start();
function imageUpload($q)
{
    $target_dir = "images/";
    $target_file = $target_dir . uniqid() . '.';
    $imageFileType = pathinfo($_FILES[$q]["name"], PATHINFO_EXTENSION);

    if (file_exists($target_file)) {
        header('Location: register-6.php');
    }
    if ($_FILES[$q]["size"] > 4000000) {
        header('Location: register-6.php');
    }
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        header('Location: register-6.php');
    }
    if (move_uploaded_file($_FILES[$q]["tmp_name"], $target_file . $imageFileType)) {
        return $target_file . $imageFileType;
    } else {
        header('Location: register-6.php');
    }
}

if ($_FILES["face"]) {
    $_SESSION["register"]["face"] = imageUpload("face");
}
if ($_FILES["body"]) {
    $_SESSION["register"]["body"] = imageUpload("body");
}
