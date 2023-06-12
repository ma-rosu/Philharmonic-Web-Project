<?php
$con = mysqli_connect("localhost", "root", null, "webDesignUVT", 3306);
$email = $_POST['emailLog']; 
$password = $_POST['passwordLog']; 
$query = "SELECT COUNT(*) AS count, adm FROM log WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($con, $query);

if ($result) {
  $row = mysqli_fetch_assoc($result);
  $count = $row['count'];
  $adm = $row['adm'];
  
  if ($count > 0) {
    if ($adm == 1) {
      echo "admin";
    } else {
      echo "user";
    }
  } else {
    echo "no";
  }
} else {
  echo "error";
}

mysqli_close($con);
?>
