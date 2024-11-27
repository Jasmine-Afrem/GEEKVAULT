<?php
include "includes/common.php";

if (!isset($_SESSION['email'])) {
    header('location: index.php');
    exit();
}

function fetch_items($con) {
    $query = "SELECT * FROM items";
    $result = mysqli_query($con, $query);
    if (!$result) {
        die("Query Failed: " . mysqli_error($con));
    }
    $items = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $items[] = $row;
    }
    return $items;
}

$items = fetch_items($con);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GeekVault | Produse FunkoPop</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="bgcolor">
    <?php
    include 'includes/header.php';
    include 'includes/check-if-added.php';
    ?>
    <br><br><br><br><br>
    <div class="container justify-content-center" >
        <div class="jumbotron bgcolor">
            <h1 class="center-content" style="color: #6b1752;">Figurine FunkoPop</h1>
        </div>
    </div>
    <div class="container justify-content-center" b>
        <div class="row text-center">
            <?php 
                if (is_array($items)) {
                    $count = 0;
                    foreach ($items as $item) { 
                        if ($count % 4 == 0) { 
                            echo '</div><div class="row text-center">'; 
                        }
                        ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4"> 
                            <div class="thumbnail">
                                <img src="img/<?php echo $item['id']; ?>.jpg" alt="Product Image" class="article-image">
                                <div class="caption">
                                    <h3 style="color: #3d0542;"><?php echo $item['name']; ?></h3>
                                    <p style="color: rgb(169, 239, 248);">Preț: <?php echo $item['price']; ?></p>
                                    <?php 
                                        if (check_if_added_to_cart($item['id'])) { 
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Produsul este in cos</a>';
                                        } else {
                                    ?>
                                            <a href="cart-add.php?id=<?php echo $item['id']; ?>" name="add" value="add" class="btn btn-block custom-button-2">ADAUGĂ ÎN COȘ</a>
                                        <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php 
                                $count++; 
                            } 
                        } else {
                            echo "<p>No items found.</p>";
                        }
                        ?>
        </div>
    </div>
    <br>
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

