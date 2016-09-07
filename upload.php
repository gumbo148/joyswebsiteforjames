<?php
include 'catagories/templates.php';
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["img_path"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["img_path"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["img_path"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["img_path"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["img_path"]["name"]). " has been uploaded.";

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

      









         if(isset($_POST['add'])) {
            $conn = connect();
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            if(! get_magic_quotes_gpc() ) {
               $name = addslashes ($_POST['name']);
               $description = addslashes ($_POST['description']);
            }else {
               $name = $_POST['name'];
               $description = $_POST['description'];
            }
            
            $price = $_POST['price'];
            $rating = $_POST['rating'];
            $category = $_POST['category'];
            $amazonUrl = $_POST['amazonUrl'];
            $img_path = $target_file;
            $sql = "INSERT INTO products ". "(name, price, description, rating, category, amazonUrl, img_path) ". "VALUES('$name','$price','$description','$rating','$category','$amazonUrl', '$img_path')";
               if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
          
            
            

            
            $conn->close();
         }else {}
            
?>