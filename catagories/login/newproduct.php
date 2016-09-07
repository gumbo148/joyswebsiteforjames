<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Urban Pet Farm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Urban pet farm is a place to find quality dog agility equipment, dog accesories, and dog care items.">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/sitecss.css">
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
        <h1>ÌCreate'ProductÍ</h1>
        <div id="pricing" class="container-fluid">
        <br>
        <br>
            <div class="row">
                <div class="col-sm-1 col-xs-12">
                </div>
                <div class="col-sm-10 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>^new"Product*</h1>
                        </div>
                        <div class="panel-body">
                        <form action="newupload.php" method="post" enctype="multipart/form-data" id="usrform">
                            <div class="col-sm-6 col-xs-12">
                                <!-- image upload -->
                                
                                    <table width="400" border="0" cellspacing="2" cellpadding="2">
                                     <tr>
                                        <th width="500">SKU-Important</th>
                                        <td>

                                        <input name="sku" type="text" id="sku" required>
                                                
                                                
                                                
                                            </td>

                                        </tr>


                                        <tr>
                                        <th width="500">Alt Text</th>
                                        <td>
                                                <input name="files[]" type="file" /><br>
                                                
                                                <input name="alttext[]" type="text" multiple="yes" />
                                            </td>

                                        </tr>

                                        <tr>
                                        <th width="500">Alt Text</th>
                                        <td>
                                                <input name="files[]" type="file" /><br>
                                                
                                                <input name="alttext[]" type="text" multiple="yes" />
                                            </td>

                                        </tr>

                                        <tr>
                                        <th width="500">Alt Text</th>
                                        <td>
                                                <input name="files[]" type="file" /><br>
                                                
                                                <input name="alttext[]" type="text" multiple="yes" />
                                            </td>

                                        </tr>

                                        <tr>
                                        <th width="500">Alt Text</th>
                                        <td>
                                                <input name="files[]" type="file" /><br>
                                                
                                                <input name="alttext[]" type="text"  multiple="yes"/>
                                            </td>

                                        </tr>
                                       
                                            
                                        </table>
                                       
                                      </div>
                       
                 
                				<div class="col-sm-6 col-xs-12">


                				<table width="400" border="0" cellspacing="1" cellpadding="2">
                				   <tr>
                                            <th width="300">Name</th>
                                            <td>
                                                <input name="name" type="text" id="name" required>
                                            </td>
                                        </tr>
                                        <tr>       
                                            <th width="300">Price</th>
                                            <td>
                                                <input name="price" type="number" step="0.01" min="0" id="price" required>
                                            </td>
                                        </tr>
                                            <tr>
                                            <th width="300">Description</th>
                                            <td>
                                            <textarea rows="2" cols="23" form="usrform" name="description" type="text" id="description">
Enter text here...</textarea>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="300">Rating</th>
                                            <td>
                                                <input name="rating" type="number" id="rating" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="300">Category</th>
                                            <td>
                                                <input name="category" type="text" id="category" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="300">Url/Web Address</th>
                                            <td>
                                                <input name="amazonUrl" type="text" id="amazonUrl" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100"> </td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td width="100"> </td>
                                            <td>
                                                <input name="add" type="submit" id="add" value="Add Product">
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                                </div>

                    
                </div>
            
            <div class="panel-footer">
            </div>
        
    </div>
    </div>
    </div>
    </div>
    <script>
                                       	function readURL(input) {
	        if (input.files && input.files[0]) {
	            var reader = new FileReader();
	         if ( input.files[0].size >  500000) {
	        	alert("Image too Large");
	        }else{
	            reader.onload = function (e) {
	                $('#blah').attr('src', e.target.result);
	            }
	        }
	            
	            reader.readAsDataURL(input.files[0]);
	        }
	    }
	    
	    $("#img_path").change(function(){
	        readURL(this);
	    });
                                       </script>
    <script src="js.js"></script>
</body>

</html>
