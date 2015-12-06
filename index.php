<?php 
include("include.php");
if (isset($_COOKIE["splipayNameCookie"])) {
    $_SESSION["fName"] = $_COOKIE["splipayNameCookie"];
    header("Location: home.php");
}
?>
<!DOCTYPE html>
<html>
    <!--<meta http-equiv="refresh" content="1" >-->
    <head>
        <title>Splipay</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <header>
        <h1>Splitpay</h1>
        <form action="logIn.php" method="post" id="logInForm">
            <div id="logIn">
                <div>
                    <br>
                    First name<br>
                    <input type="text" name="fName" id="1" autofocus="true">
                </div>
                <div class="placeholder"></div>
                <div>
                    <br>
                    Password<br>
                    <input type="password" name="pwd" id="2">
                </div>
            </div><br>
            <input type="submit" value="Log in" id="3">
                <?php 
                    if (isset($_SESSION["logInError"])) {
                        if ($_SESSION["logInError"] === true) {
                            $_SESSION["logInError"] = false;
                            echo ("<div id='errorMessage'><br>I don't know you</div>");
                        } 
                    }
                ?>
        </form>
        </header>
        <div id="signUp">
            <br><br><br><br><br><br>
            <h2>Sign up:</h2><br><br>
            <form action="signUp.php" method="post">
                <div>
                    <input type="text" name="fName" placeholder="First name" id="4">
                    &nbsp;
                    <input type="text" name="lName" placeholder="Last name" id="5"><br><br>
                    <input type="email" name="email" placeholder="Email" id="email"><br><br>
                    <input type="password" name="pw" placeholder="Password" id="7">
                    &nbsp;
                    <input type="password" name="pw2" placeholder="Re-enter password" id="8"><br><br>
                    <input type="submit" value="Sign up" disabled="true" title="You shall not pass!" id="9">
                </div>
            </form>
        </div>
    </body>
    <script>  
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        function checkSignUp () {
            if (re.test(document.getElementById("email").value) && document.getElementById("4").value !== "" && document.getElementById("5").value !== "" && 
                    document.getElementById("7").value !== "" && document.getElementById("8").value === document.getElementById("7").value) {
                document.getElementById("9").disabled = false;
                document.getElementById("9").title = "";
            }
            else {
                document.getElementById("9").disabled = true;
                document.getElementById("9").title = "You shall not pass! ";
            }
        }
        setInterval(checkSignUp, 1);
        function checkLogIn () {
            if (document.getElementById("1").value !== "" && document.getElementById("2").value !== "") {
                document.getElementById("3").disabled = false;
                document.getElementById("3").title = "";
            }
            else {
                document.getElementById("3").disabled = true;
                document.getElementById("3").title = "You shall not pass! ";
            }
        }
        setInterval(checkLogIn, 1);
    </script>
</html>
