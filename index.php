<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Urban Pet Farm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 max">
    <meta name="description" content="UrbanPetFarm is a place to find quality dog agility equipment, dog accesories, and dog care items. Urban Pet Farm cares about quality and your animals.">
     
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

    <h1>ÌUrban'Pet'FarmÍ</h1>


    

       
        <p>We Like to send coupons (<small><i> Only once a month maybe two </i></small>)</p>
        <form class="form-inline" action="email.php" method="post">
            <input name="email" id="email" type="email" class="form-control" size="50" placeholder="Email Address" required>
            <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#myModal" name="add">Subscribe</button>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Thank you!</h4>
                        </div>
                        <div class="modal-body">
                            <p>Look for our coupon emails</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id="banner" class="container-fluid">
        <div class="text-center">
        
        <div class="row">
            
          <h1>"Our mission is to be the best in the world...</h1>
          <h1>of Quality Pet Products."</h1>
            
                
    </div>
    </div>
    </div>
    <div id="pricing" class="container-fluid">
        <div class="text-center">
        </div>
        <div class="row slideanim">
           <div class="col-sm-2 col-xs-12"> 
           </div>
          <?php include 'catagories/login/templates.php';?>
                <?php
                getCategories();
                ?>
            
                
            </div>
            <div class="col-sm-2 col-xs-12"> 
           </div>
    
    </div>
    <!-- Container (Contact Section) -->
    <div id="contact" class="container-fluid bg-grey">
    <div class="col-sm-4 col-xs-12"> 
    <h5>Follow Us</h5>
		

           </div>
           <div class="col-sm-4 col-xs-12"> 
           </div>
           <div class="col-sm-4 col-xs-12"> 
           </div>
        
    </div>

   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sitecss.css">
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
