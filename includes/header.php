<link href="https://fonts.googleapis.com/css2?family=Sniglet:wght@400;700&display=swap" rel="stylesheet">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand"><b>GEEKVAULT</b></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php if(isset($_SESSION['email'])) { ?>
                    <li><a href="cart.php" style="color: #b12587;"><span class="glyphicon glyphicon-shopping-cart"></span><b> COȘ</b></a></li>
                    <li class="dropdown" id="dropdown">
                        <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false" style="color: #b12587;">
                            <span></span><b>MENU</b><span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" id="dropdown-menu">
                            <li><a href="settings.php">SETTINGS</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="logout_script.php">LOGOUT</a></li>
                        </ul>
                    </li>
                <?php } else { ?>
                    <li><a href="signup.php" target="_blank" style="color: #b12587;"><span class="glyphicon glyphicon-user"></span><b> SIGN UP</b></a></li>
                    <li><a href="login.php" target="_blank" style="color: #b12587;"><span class="glyphicon glyphicon-log-in"></span><b> LOGIN</b></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var dropdownMenu = document.getElementById('dropdown-menu');
        var dropdown = document.getElementById('dropdown');

        dropdown.addEventListener('mouseover', function() {
            dropdownMenu.style.display = 'block';
        });

        dropdown.addEventListener('mouseout', function() {
            dropdownMenu.style.display = 'none';
        });
    });
</script>
