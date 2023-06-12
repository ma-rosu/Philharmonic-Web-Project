<?php
$con = mysqli_connect("localhost", "root", null, "webDesignUVT", "3306");
$txtName = $_POST['name'];
$txtDate = $_POST['date'];
$txtMusic = $_POST['music'];
$sql = "INSERT INTO `events` (`eventName`, `eventDate`, `eventMusic`, `special`) VALUES ('$txtName', '$txtDate', '$txtMusic', '1');";
$rs = mysqli_query($con, $sql);

if ($rs) {
    echo "Event saved!";
} else {
    echo "Event not saved!";
}
?>