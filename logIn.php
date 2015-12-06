<?php
include("include.php");
$usrn = $_POST["fName"];
$pw = hash("sha256", $_POST["pwd"]);
$sql = "SELECT id  FROM user WHERE fName = '$usrn' AND pwHash = '$pw'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $_SESSION["fName"] = $usrn;
    setcookie("splipayNameCookie",$usrn,time()+3600*24*30, '/');
    header('Location: home.php');
}
else {
    $_SESSION["logInError"] = true;
    header('Location: index.php');
}
