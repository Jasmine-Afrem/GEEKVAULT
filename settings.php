<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GEEKVAULT | New Page</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="bgcolor">
    <?php include 'includes/header.php'; ?>
    <div class="container">
        <br><br><br><br>
        <div class="row row_style1">
            <div class="col-md-4 col-md-offset-4">
                <div class="row">
                    <div class="col-xs-12 col-xs-offset-1">
                        <div class="form-background center-content">
                            <h1 style="color: #6b1752;">NEW PAGE TITLE</h1><br>
                            <div><b class="red">
                                <?php if(isset($_GET["message"])) { echo $_GET['message']; } ?>
                            </b></div>
                            <form action="new_page_script.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Field 1" name="field1">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Field 2" name="field2">
                                </div>
                                <button class="custom-button3">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
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
    <script src="script.js"></script>   
</body>
</html>
