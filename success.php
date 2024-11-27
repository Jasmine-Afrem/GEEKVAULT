<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];

$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . "  and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GEEKVAULT | Success</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <style>
        body, h1, h2, h3, h4, h5, h6, p, a {
            font-family: 'Sniglet', sans-serif;
            color: #b12587;
        }

        .jumbotron {
            background-color: rgba(46, 21, 87, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: dashed 3px #b12587;
            color: #b12587;
            margin-top: 50px;
        }

        .jumbotron h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .jumbotron p {
            font-size: 18px;
        }

        .jumbotron a {
            color: #38c2ec;
        }

        .jumbotron a:hover {
            color: #54c5f0;
        }
    </style>
</head>
<body class="bgcolor">
    <?php include 'includes/header.php'; ?>
    <br><br><br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="jumbotron">
            <center>
                <h2><b>Comanda a fost confirmata. Multumim ca ai comandat de la noi, vei primi prin email codurile pentru produsele cumparate.</b></h2>
            </center>
            <hr>
            <center>
                <p>Apasa <a href="products.php">aici</a> pentru a cumpara alte produse.</p>
            </center>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?> 
</body>
</html>
