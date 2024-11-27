

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GEEKVAULT | Cart</title>
    <link href="https://fonts.googleapis.com/css2?family=Sniglet:wght@400;700&display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <style>
        body, h1, h2, h3, h4, h5, h6, p, a, th, td {
            font-family: 'Sniglet', sans-serif;
        }

        .table {
            margin-bottom: 0; 
        }

        .text-center {
            text-align: center;
        }

        #totalCost {
            color: #fff;
            background-color: #580f5f;
            border: none;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            border-radius: 12px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        #totalCost:hover {
            background-color: #540d5a;
            transform: scale(1.05);
        }

        #totalCost:active {
            background-color: #4c0f52;
            transform: scale(1.00);
        }
    </style>
</head>
<body style="padding-top: 50px;" class="bgcolor">
    
    <?php
    include 'includes/header.php';
    ?>
    
    <br><br><br>
    <div class="container bgcolor">
        <!-- New background div for the cart -->
        <div class="cart-background" id="cartBackground">
            <div class="row row_style2">
                <div class="col-sm-10 col-sm-offset-1">
                    <table class="table table-striped">
                       
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die(mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th style="color: #38c2ec;">Numarul produsului</th>
                                    <th style="color: #38c2ec;">Numele</th>
                                    <th style="color: #38c2ec;">Pretul</th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id="";
                                    $id .= $row["id"] . ",";
                                    echo "<tr>
                                              <td>" . "#" . $row["id"] . "</td>
                                              <td>" . $row["Name"] . "</td>
                                              <td>Lei: " . $row["Price"] . "</td>
                                              <td class='text-center'>
                                                  <a href='cart-remove.php?id={$row['id']}' class='remove_item_link' style='color: #38c2ec;'> Elimina </a>
                                              </td>
                                          </tr>";
                                }
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<tr><td colspan='4' class='text-center'><h1>Nu ai produse in cos!</h1><h3><a href='products.php'>Apasa aici</a> pentru a explora produsele.</h3></td></tr>";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
            </div>
            <center>
                <div class="text-center" id="totalCost" style="color: rgb(169, 239, 248);">Total Cost: Lei <?php echo number_format($sum, 2); ?></div>
            </center>
             
        </div> 
    </div>
    
    <?php
    include 'includes/footer.php';
    ?>
    
    <?php
    if ($sum > 0) {
        echo '<div class="text-center">
                <a href="success.php?itemsid='.$id.'" class="btn btn-primary custom-button3" >Confirma comanda</a>
              </div>';
    }
    ?>
    
    <script>
        function calculateTotalCost() {
            var totalCost = <?php echo $sum; ?>;
            document.getElementById("totalCost").innerHTML = "Total Cost: Lei " + totalCost.toFixed(2);
        }

        $(document).ready(function(){
            calculateTotalCost();
        });
    </script>
    <script>
        $(document).ready(function(){
            var itemCount = $(".table tbody tr").length;
            var cartHeight = 190 + (itemCount * 50); 
            $("#cartBackground").css("height", cartHeight + "px");
        });
    </script>
</body>
</html>
