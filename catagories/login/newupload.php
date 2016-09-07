<?php
include 'templates.php';
if(isset($_FILES['files'])){
    $errors= array();
    $nameString = "";
 	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$file_name = $key.$_FILES['files']['name'][$key];
		$file_size =$_FILES['files']['size'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
		$file_type=$_FILES['files']['type'][$key];	

        if($file_size > 2097152){
			$errors[]='File size must be less than 2 MB';
        }		
        
        $desired_dir="images/";
        if(empty($errors)==true){

            if(is_dir($desired_dir)==false){

                mkdir("$desired_dir", 0700);
                		// Create directory if it does not exist
            }
            if(is_dir("$desired_dir/".$file_name)==false){

                move_uploaded_file($file_tmp,"images/".$file_name);

            }
            else{	
            								//rename the file if another one exist
                $new_dir="images/".$file_name.time();

                 rename($file_tmp,$new_dir) ;				
            }

            

        }else{
                print_r($errors);
        }

        $nameString.=' '.$file_name;
    }
	if(empty($error)){
		echo "Success";
	}





    if(isset($_POST['add'])) {
            $conn = connect();
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            if(! get_magic_quotes_gpc() ) {
               $name = addslashes ($_POST['name']);
               $description = addslashes ($_POST['description']);
            }
            else {
               $name = $_POST['name'];
               $description = $_POST['description'];
            }
            
            $price = $_POST['price'];
            $rating = $_POST['rating'];
            $category = $_POST['category'];
            $amazonUrl = $_POST['amazonUrl'];
             $sku = $_POST['sku'];
            
            $sql = "INSERT INTO products ". "(name, price, description, rating, category, amazonUrl, sku) ". "VALUES('$name','$price','$description','$rating','$category','$amazonUrl', '$sku')";
               if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } 
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    }

            $img_array = explode(" ", $nameString);
            
            reset($img_array);
            next($img_array);

            foreach ($_POST['alttext'] as $key => $value) {
                if(! get_magic_quotes_gpc() ) {
                    $value = addslashes($value);
                }
   
   
                $temp = current($img_array);
   
                $sql = "INSERT INTO pictures ". "(productId, altTag, img_path) ". "VALUES('$sku','$value','$temp')";

                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                    next($img_array);
                }
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
        

}
        $file = '../products/doglight.php';
        $temp_file_name = str_replace(" ", "-", $name);
        $destination = '../products/'.$temp_file_name.'.php';

        if (!copy($file, $destination)) {
            echo "failed to copy $file...\n";
        }

            

        
            $conn->close();
         }
}
?>