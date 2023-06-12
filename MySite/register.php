<?php
$con = mysqli_connect("localhost", "root", null, "webDesignUVT", "3306");
$txtEmail = $_POST['emailRegister'];
$txtPassword = $_POST['passwordRegister'];

// Check if email already exists
$checkQuery = "SELECT * FROM `log` WHERE `email` = '$txtEmail'";
$checkResult = mysqli_query($con, $checkQuery);

if (mysqli_num_rows($checkResult) > 0) {
    mysqli_close($con);
    echo "<script>alert('An account with this email already exists. Please choose a different email.'); window.location.href = 'register.html';</script>";
    exit();
}

$sql = "INSERT INTO `log` (`email`, `password`, `admin`) VALUES ('$txtEmail', '$txtPassword', '0')";
$rs = mysqli_query($con, $sql);

if ($rs) {
    mysqli_close($con);
    header("Location: log.html"); // Redirect to log.html
    exit();
} else {
    mysqli_close($con);
    echo "<script>alert('An error occurred during registration. Please try again.'); window.location.href = 'register.html';</script>";
}
?>
