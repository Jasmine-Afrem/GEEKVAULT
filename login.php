<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Sniglet:wght@400;700&display=swap" rel="stylesheet">
    <title>GEEKVAULT | Login</title>
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
    <div class="container">
        <div class="row row_style1">
            <div class="col-md-4 col-md-offset-4">
                <div class="row">
                    <div class="col-xs-12 col-xs-offset-1">
                        <div class="form-background center-content">
                            <center>
                                <h1 style="color: #6b1752;"> LOGIN </h1>
                                <br>
                                <?php
                                if (isset($_GET['error'])) {
                                    echo '<div class="alert alert-danger">' . htmlspecialchars($_GET['error']) . '</div>';
                                }
                                ?>
                            </center>
                            <form action="login_submit.php" method="POST">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Parola" name="password" required>
                                </div>
                                <center>
                                    <button class="custom-button3">LOGIN</button>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                });

                button.addEventListener('mouseup', () => {
                    button.style.transition = 'transform 0.1s';
                    button.style.transform = 'scale(1)';
                });
            });
        });
    </script>
     
</body>
</html>
