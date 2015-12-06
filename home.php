<?php
include("include.php");
if (!isset($_SESSION["fName"])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Splipay</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <header>
            <h1>Splitpay</h1>
            <div id="dropDown"onmouseover="document.getElementById('dropDownElements').style.display = 'flex'" onmouseout="document.getElementById('dropDownElements').style.display = 'none'"><div id="dropDown2"><?php echo $_SESSION["fName"]; ?></div></div>
            <div id="dropDownElements" onmouseover="document.getElementById('dropDownElements').style.display = 'flex'" onmouseout="document.getElementById('dropDownElements').style.display = 'none'">
                <div id="dropDownElement1" onclick="logOut()"><div id="dropDown2">Log out</div></div>
            </div>
        </header>
    </body>
    <script>
        var dropDownMenu = false;
        document.getElementById("dropDown2").style.width = ((document.getElementById("dropDown2").innerHTML.length * 10) + 16) + "px";
        function logOut () {
            window.location.href = 'logOut.php';
        }
    </script>
</html>