<?php
include("include.php");
$pwHash = hash("sha256", $_POST["pw"]);
$sql = "INSERT INTO user (fName, lName, pwHash,email) VALUES ( '".$_POST["fName"]."','".$_POST["lName"]."','$pwHash','".$_POST["email"]."')";
if ($conn->query($sql) === TRUE) {
    $_SESSION["fName"] = $_POST["fName"];
    setcookie("splipayNameCookie",$_POST["fName"],time()+3600*24*30, '/');
    header('Location: home.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();