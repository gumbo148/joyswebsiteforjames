<?php
include 'catagories/templates.php';
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
            
            $email = $_POST['email'];
   
            $sql = "INSERT INTO customers ". "(email) ". "VALUES('$email')";
               if ($conn->query($sql) === TRUE) {
    echo '<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Urban Pet Farm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 max">
    <meta name="description" content="UrbanPetFarm is a place to find quality dog agility equipment, dog accesories, and dog care items. Urban Pet Farm cares about quality and your animals.">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sitecss.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Urban Pet Farm</a>


            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#pricing">PRODUCTS</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron text-center">
   <h1>Thank You!</h1>
    </div>
    


    

       
        
    <div id="pricing" class="container-fluid">
        <div class="text-center">
        
            <div class="row">
            <div class="col-xs-12">
            <h3> <a class="previous" onclick="backtopage()">Click here to go back</a></h3>
            </div>
                
            </div>
    </div>
    </div>
    <!-- Container (Contact Section) -->
    <div id="contact" class="container-fluid bg-grey">
        
    </div>

   <script src="js.js"></script>
</body>

</html>
';
} else {
    echo '<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Urban Pet Farm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 max">
    <meta name="description" content="UrbanPetFarm is a place to find quality dog agility equipment, dog accesories, and dog care items. Urban Pet Farm cares about quality and your animals.">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sitecss.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Urban Pet Farm</a>


            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#pricing">PRODUCTS</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron text-center">
   <h1>WHOOPS! Something Went Wrong!</h1>
    </div>

        
    <div id="pricing" class="container-fluid">
        <div class="text-center">
        
            <div class="row">
            <div class="col-xs-12">
            <h3> <a class="previous" onclick="backtopage()">Click here to go back and try again</a></h3>
            </div>
                
            </div>
    </div>
    </div>
    <!-- Container (Contact Section) -->
    <div id="contact" class="container-fluid bg-grey">
        
    </div>

   <script src="js.js"></script>
</body>

</html>';
}
          
            
        }    

            
            $conn->close();
?>