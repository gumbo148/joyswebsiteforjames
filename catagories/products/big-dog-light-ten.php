<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Urban Pet Farm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Urban pet farm is a place to find quality dog agility equipment, dog accesories, and dog care items.">
    
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
                <a class="navbar-brand" href="../../index.php">Urban Pet Farm</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#pricing">PRODUCTS</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron text-center jumbo-product">
        <h1>ÌUrban'Pet'FarmÍ</h1>
    </div>

    <a class="previous" onclick="backtopage()">&icirc;Previous&Ntilde;</a>
    <br>
    
        


<?php include '../login/templates.php';?>
<?php
$conn = connect();
$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $id  ";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
        $name = $row["name"];
       
    }
 else {
    echo "0 results";
}
$conn->close();





?>
<?php
$conn = connect();
$sqlg = "SELECT * FROM pictures JOIN products ON products.sku = pictures.productId WHERE products.id = $id";
$resulting = $conn->query($sqlg);


$alt_list = array();
$pics_array = array();
if ($resulting->num_rows > 0) {
    // output data of each row
    while($alt = $resulting->fetch_assoc()) {
    
    array_push($pics_array, $alt["img_path"]);
    array_push($alt_list, $alt["altTag"]);

    }
}
 else {
    echo "0 results";
}
$conn->close();

?>



    <div id="pricing" class="container-fluid">  
        <div class="row">
        <div class="col-sm-1 col-xs-12">
        </div>
        <div class="col-sm-10 col-xs-12">
                <div class="panel panel-default text-center">
                <div class="panel-heading">
                <h1>&copy;<?php 
                        echo str_replace(" ", "'", $row["name"]);

                            $i = 0;
                            echo '<span id="rate-stars">"\rating';

                            while ( $i < intval( $row["rating"]) )
                             {

                               echo '&micro;';

                               ++$i;
                            }
                            echo '*</span>';
                            ?>



                </h1>
                        </div>
                        
                        <?php 
    
        reset($pics_array);  
        reset($alt_list);
      


     ?>

                    <div class="panel-body">
                    <div class="col-sm-6 col-xs-12">
                            <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
                                    <div class='carousel-outer'>
                        <!-- Wrapper for slides -->
                       <div class='carousel-inner'>
                                 <div class='item active fill'>
                             <img class="img-responsive" src='../../images/<?php  echo $pics_array[0];  ?>' alt='<?php echo $alt_list[0];?>' />
                            </div>
                                    <div class='item fill'>
                                     <img class="img-responsive" src='../../images/<?php echo next($pics_array); ?>' alt='<?php echo next($alt_list);?>' />
                                            </div>
                                    <div class='item fill'>
                                     <img class="img-responsive" src='../../images/<?php echo next($pics_array);  ?>' alt='<?php echo next($alt_list);?>' />
                                    </div>
                
                            <div class='item fill'>
                             <img class="img-responsive" src='../../images/<?php echo next($pics_array);  ?>' alt='<?php echo next($alt_list);?>' />
                                    </div>
            
                                </div>
            
        <!-- Controls -->
        <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
            <span class='glyphicon glyphicon-chevron-left'></span>
        </a>
        <a class='right carousel-control' href='#carousel-custom' data-slide='next'>
            <span class='glyphicon glyphicon-chevron-right'></span>
        </a>
     </div>
    <?php 
        reset($pics_array);  
        reset($alt_list);
    ?>
    <!-- Indicators -->
                    <ol class='carousel-indicators'>
                        <li data-target='#carousel-custom' data-slide-to='0' class='active'><img class="img-responsive" width="100" height="50" src='../../images/<?php echo $pics_array[0];  ?>' alt='<?php echo $alt_list[0];?>' /></li>
                        <li data-target='#carousel-custom' data-slide-to='1'><img class="img-responsive"width="100" height="50" src='../../images/<?php echo next($pics_array);  ?>' alt='<?php echo next($alt_list);?>' /></li>
                        <li data-target='#carousel-custom' data-slide-to='2'><img class="img-responsive" width="100" height="50" src='../../images/<?php echo next($pics_array);  ?>' alt='<?php echo next($alt_list);?>' /></li>
                        <li data-target='#carousel-custom' data-slide-to='3'><img class="img-responsive" width="100" height="50" src='../../images/<?php echo next($pics_array);  ?>' alt='<?php echo next($alt_list);?>' /></li>
        
                    </ol>
                                </div>
                        </div>
                        <div id="product-specs" class="col-sm-6 col-xs-12">

                            <h3>Description-<?php echo $row["name"] ?></h3>
                                <p><?php echo $row["description"] ?></p>
                                <br>
                                <br>
                                <br>
                                <hr class="word-break">
                            <h3>Reviews -  </h3>
                                <p></p>
                                <br>
                                <br>
                                <br>
                                <hr class="word-break">
                            <h3></h3>
                            <br>
                            <?php echo ' 
                            <button class="btn btn-warning btn-lg"><a href="',$row["amazonUrl"],'">Get on &nbsp;<i class="fa fa-amazon" ></i>mazon</a></button>'
                                ?>


                        </div>
                        </div>
                   
                
            </div>
        </div>
            
     </div>  
  </div>


    <h3 id="related-items">Related Items</h3>
   <hr id="related-break">
    <div id="related" class="container-fluid">
        <div class="text-center">
        </div>
        <div class="row slideanim">

            <?php 


                getRelated();
             ?>
            
            </div>
        </div>
    </div>
    <!-- Container (Contact Section) -->
    <div id="contact" class="container-fluid bg-grey">
        <h2 class="text-center">CONTACT</h2>
        <div class="row">
            <div class="col-sm-5">
                <p>Contact us and we'll get back to you within 24 hours.</p>
                <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
                <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
            </div>
            <div class="col-sm-7 slideanim">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
                <br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/sitecss.css">
    <script type="text/javascript">
       
       
    $(document).ready(function() {
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function() {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });

        $(window).scroll(function() {
            $(".slideanim").each(function() {
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    })
  
    function backtopage() {

    window.history.back();
    }
 
   </script>

</body>

</html>
