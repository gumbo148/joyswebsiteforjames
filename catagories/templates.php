<?php

function connect(){
$servername = "mysql.leveluptee.com";
$username = "levelupteecom";
$password = "LQxs!RWF";
$dbname = "leveluptee_com";

// Create connection

$connect = new mysqli($servername, $username, $password, $dbname);

return $connect;
}



function getCategories(){
    $conn = connect();

    if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 



$sql = "SELECT DISTINCT category FROM products";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
   
        while($row = $result->fetch_assoc()) {
        
        
            echo  '<div class="col-md-4 col-xs-12 category-main">
            
                <div class="panel panel-default text-center">

                <a href="catagories/',$row['category'],'.php">

                    <div class="panel-heading">

                        <h1>&copy;Dog\'',$row['category'],'</h1>

                    </div>
                    </a>
                    <div class="col-md-12 col-xs-12 fill">
                        <img class="img-responsive" src="images/doglight1.jpg">
                        </div>
                    <div class="panel-body">
                        
                        

                        <div  class="col-sm-6 ">
                        <ul>
                                <li>Collars, Harnesses, Leashes</li>
                                <li>Beds, Outfits, Backpacks</li>
                                <li>Food, Bowls, Grooming</li>
                               
                        </ul>


                    </div>

                    <div class="col-sm-6 ">

                                <ul>
                                <li>Collars, Harnesses, Leashes</li>
                                <li>Beds, Outfits, Backpacks</li>
                                <li>Food, Bowls, Grooming</li>
                               
                        </ul>
                    </div>
                    </div>

                    

                    
                    
                    
                </div>
                
            </div>';


        }

     
    }    
    else {
        echo "0 results";
    }









       
      $conn->close(); 

}



function get_master_img_array($row){
     $master_img_array=array();
 $myArray = explode(" ", $row["img_path"]);
           while ( ($fruit_name = current($myArray)) !== FALSE ) {
                $fruit_name = substr(current($myArray), 1);
                    
                         array_push($master_img_array, current($myArray));
                         
        
       next($myArray);

}
return $master_img_array;
}




function getAccessories(){

$conn = connect();
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM products WHERE category='accessories' ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row

        
           while($row = $result->fetch_assoc()) {
                $alt_list = array();
                $pics_array = array();

                $id = $row["id"];



                $img_sql = "SELECT * FROM pictures JOIN products ON products.sku = pictures.productId WHERE products.id = $id";
                $img_result = $conn->query($img_sql);
                
            while($img_row = $img_result->fetch_assoc()) {
            
            array_push($pics_array, $img_row["img_path"]);
            array_push($alt_list, $img_row["altTag"]);

            }
                
        
       echo  '<div class="col-sm-4 col-xs-12">

                            <div class="panel panel-default text-center">

                                <a href="products/',str_replace(" ", "-", $row["name"]),'.php?id=',$row["id"],'">

                                    <div class="panel-heading">
                                
                                <h1>&copy;',str_replace(" ", "'", $row["name"]),'</h1>
                                
                            </div>
                            </a>
                            <div class="col-md-12 col-xs-12 fill">
                                <img class="img-responsive" src="../images/',$pics_array[0],'" alt="',$alt_list[0],'" >
                            </div>
                            <div class="panel-body">

                        
                            <button id="amazon-button" class="btn btn-warning btn-lg " href="',$row["amaonUrl"],'" rel="nofollow">Find On Amazon <i class="fa fa-amazon" ></i></button>
                            </div>

                           

                        

                    </div>

                </div>';


       unset($alt_list);
        unset($pics_array);        
    }
    $conn->close(); 
} else {
    echo "0 results";
}




}






       








    function getAgility(){

        $conn = connect();
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM products WHERE category='agility' ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row

        
           while($row = $result->fetch_assoc()) {
                $alt_list = array();
                $pics_array = array();

                $id = $row["id"];



                $img_sql = "SELECT * FROM pictures JOIN products ON products.sku = pictures.productId WHERE products.id = $id";
                $img_result = $conn->query($img_sql);
                
            while($img_row = $img_result->fetch_assoc()) {
            
            array_push($pics_array, $img_row["img_path"]);
            array_push($alt_list, $img_row["altTag"]);

            }
                
        
       echo  '<div class="col-sm-4 col-xs-12">

                            <div class="panel panel-default text-center">

                                <a href="products/',str_replace(" ", "-", $row["name"]),'.php?id=',$row["id"],'">

                                    <div class="panel-heading">
                                
                                <h1>&copy;',str_replace(" ", "'", $row["name"]),'</h1>
                                
                            </div>
                            </a>
                            <div class="col-md-12 col-xs-12 fill">
                                <img class="img-responsive" src="../images/',$pics_array[0],'" alt="',$alt_list[0],'">
                            </div>
                            <div class="panel-body">

                        
                            <button id="amazon-button" class="btn btn-warning btn-lg " href="',$row["amaonUrl"],'" rel="nofollow">Find On Amazon <i class="fa fa-amazon" ></i></button>
                            </div>

                           

                        

                    </div>

                </div>';


       unset($alt_list);
        unset($pics_array);        
    }
    $conn->close(); 
} else {
    echo "0 results";
}



       
              

    }

















































function getRelated(){
        
        $conn = connect();
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM products ORDER BY RAND() LIMIT 0,3";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            
    
      
    while($row = $result->fetch_assoc()) {
        
            
                $alt_list = array();
                $pics_array = array();

                $id = $row["id"];



                $img_sql = "SELECT * FROM pictures JOIN products ON products.sku = pictures.productId WHERE products.id = $id";
                $img_result = $conn->query($img_sql);
                
            while($img_row = $img_result->fetch_assoc()) {
            
            array_push($pics_array, $img_row["img_path"]);
            array_push($alt_list, $img_row["altTag"]);

            }

        
       echo  '<div class="col-sm-4 col-xs-12">

                            <div class="panel panel-default text-center">

                                
                                <a href="doglight.php?id=',$row["id"],'">
                                    <div class="panel-heading">
                                
                                <h1>&copy;',str_replace(" ", "'", $row["name"]),'</h1>
                                
                            </div>
                            </a>
                            <div class="col-md-12 col-xs-12 fill">
                                <img class="img-responsive" src="../../images/',$pics_array[0],'">
                            </div>
                            <div class="panel-body">

                        
                            <button id="amazon-button" class="btn btn-warning btn-lg " href="',$row["amaonUrl"],'" rel="nofollow">Find On &nbsp;<i class="fa fa-amazon" ></i>mazon </button>
                            </div>

                           

                        

                    </div>

                </div>';



    }

    
    $conn->close(); 
} else {
    echo "0 results";
}

                  
    }
?>

