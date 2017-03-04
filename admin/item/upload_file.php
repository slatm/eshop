<?php

if (file_exists("E:/xampp/upload/" . $_FILES["iimage"]["name"])) {
    echo $_FILES["iimage"]["name"] . " already exists. ";
} else {
    move_uploaded_file($_FILES["iimage"]["tmp_name"],
        "E:/xampp/upload/" . $_FILES["iimage"]["name"]);
    echo "Stored in: " . "E:/xampp/upload/" . $_FILES["iimage"]["name"];
}
?>