<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Sniglet:wght@400;700&display=swap" rel="stylesheet">
        <title>GEEKVAULT</title>
        <link href="css/style.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css"/>

    </head>
    <body class="bgcolor">
    
        <?php
        include 'includes/header.php';
        ?>
        <div id="banner-image">
            <video autoplay loop muted>
                <source src="img/ifh17g4c2q861.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="container" id="banner_content">
                <center>
                    <div class="content-wrapper">
                        <h1 style="color: #b12587;"><b>GEEKVAULT</b></h1>
                        <p><b>Descopera-ti pasiunea pentru colectionare!</b></p>
                        <a href="products.php" class="custom-button"><b>CUMPĂRĂ ACUM</b></a>
                    </div>
                </center>
            </div>
       </div><br><br>
       <div class="container">
            <div class="row text-center">               
                <div class="col-md-4 col-sm-7"> 
                    <div class="thumbnail">
                        <a href="products.php">
                            <image src="img/ac.jpg" class="article-image"/>
                                <div class="caption">
                                    <h2 style="color: #2e1557; "><b>Accesorii</b></h2>
                                    <p style="color: rgb(169, 239, 248);">Cani, brelocuri.</p>
                                </div>  
                        </a>
                </div>
        </div>
        <div class="col-md-4 col-sm-7"> 
            <div class="thumbnail">
                <a href="products.php">
                    <image src="img/49.jpg" class="article-image"/>
                        <div class="caption">
                            <h2 style="color: #2e1557; "><b>FunkoPOP</b></h2>
                            <p style="color: rgb(169, 239, 248);">Figurine adorabile.</p>
                        </div>
                </a>
            </div>
        </div>

        <div class="col-md-4 col-sm-7"> 
            <div class="thumbnail">
                <a href="products.php">
                    <image src="img/t.jpg" class="article-image"/>
                        <div class="caption">
                            <h2 style="color: #2e1557; "><b>Merch</b></h2>
                             <p style="color: rgb(169, 239, 248);">Haine.</p>
                         </div>
                </a>
            </div>
        </div>
             </div>
         </div><br><br><br><br>
         
      
                
        
       <footer class="fo">
           <div class="container">
               <center>
                   <p>Copyright <small>&copy;</small> GeekVault | All Rights Reserved</p>
               </center>
           </div>
           
           
       </footer>
        
    <script src="script.js"></script>   
    </body>
</html>