<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GEEKVAULT | Logout</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <style>
        @font-face {
            font-family: 'Sniglet';
            src: url('path/to/custom-font.woff2') format('woff2'), 
                 url('path/to/custom-font.woff') format('woff'); 
        }

    </style>
</head>
<body class="bgcolor">
    <div>
        <?php include 'includes/header.php'; ?>
        <br><br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="color: #b12587;">LOGGED  OUT</div>
                        <div class="panel-body">
                            <p>Ai fost delogat. <a href="login.php">Logheaza-te din nou.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>