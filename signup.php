<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Sniglet:wght@400;700&display=swap" rel="stylesheet">
        <title>GEEKVAULT | Signup </title>
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
        <br><br><br><br><br><br>
        <center>
            <div class="container">
            <div class="row row_style1">
                <div class="col-md-4 col-md-offset-4">
                    <div class="row">
                        <div class="col-xs-12 col-xs-offset-1">
                            <div class="form-background caption">
                                <center>
                                    <h1 style="color: #6b1752;"> INREGISTRARE </h1>
                                    <br>
                                </center>
                                <form action="signup_script.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nume Prenume" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                        <?php
                                            if(isset($_GET["m1"])){
                                                echo $_GET['m1'];
                                            }
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Parola" name="password" pattern=".{6,}" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Numar de telefon" name="contact" maxlength="10" size="10" required>
                                        <?php
                                            if(isset($_GET["m2"])){
                                                echo $_GET['m2'];
                                            }
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Oras" name="city">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Adresa" name="address">
                                    </div>
                                    <center>
                                        <button class="custom-button3">REGISTER</button>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </center>
        
        <?php
            include 'includes/footer.php';
        ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const buttons = document.querySelectorAll('.custom-button3');

                buttons.forEach(button => {
                    button.addEventListener('mouseover', () => {
                        button.style.transition = 'transform 0.5s';
                        button.style.transform = 'scale(1.1)';  
                    });

                    button.addEventListener('mouseout', () => {
                        button.style.transition = 'transform 0.5s';
                        button.style.transform = 'scale(1)';  
                    });

                    button.addEventListener('mousedown', () => {
                        button.style.transition = 'transform 0.1s';
                        button.style.transform = 'scale(0.95)';  

                    button.addEventListener('mouseup', () => {
                        button.style.transition = 'transform 0.1s';
                        button.style.transform = 'scale(1)';  
                    });
                });
            });
        </script>
           
    </body>
</html>
