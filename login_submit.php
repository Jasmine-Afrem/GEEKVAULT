<?php
require("includes/common.php");

$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);

// Note: Replace the following with password hashing if not already done
// $hashed_password = md5($password);

$query = "SELECT id, email, password FROM users WHERE email='" . $email . "'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$num = mysqli_num_rows($result);

if ($num == 0) {
    $error = "Enter Correct E-mail and Password Combination";
    header('location: login.php?error=' . urlencode($error));
} else {
    $row = mysqli_fetch_array($result);
    // Verify the password (assuming hashed passwords are stored)
    // if (password_verify($password, $row['password'])) {
    if ($password == $row['password']) { // Replace with password_verify for hashed passwords
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_id'] = $row['id'];
        header('location: products.php');
    } else {
        $error = "Enter Correct E-mail and Password Combination";
        header('location: login.php?error=' . urlencode($error));
    }
}
?>
