<?php
$con = mysqli_connect("localhost", "root", null, "webDesignUVT", "3306");
$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtMessage = $_POST['message'];
$sql = "INSERT INTO `contact` (`name`, `email`, `message`) VALUES ('$txtName', '$txtEmail', '$txtMessage');";
$rs = mysqli_query($con, $sql);

if ($rs) {
    echo "Message has been saved!";
} else {
    echo "Message has not been saved!";
}
?>