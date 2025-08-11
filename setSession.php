<?php
//Write a server-side script ti demonstrate session creation, management, and retrieval in PHP.


//Session Creation and Management Example
session_start();
$_SESSION["username"] = "Rajan Poudel";
$_SESSION["user_id"] = 12345;


//Retrieving session data
if (isset($_SESSION["username"])) {
    echo "Welcome, " . $_SESSION["username"];
} else {
    echo "No session found.";
}

//Unsetting session variables
unset($_SESSION["username"]);
session_destroy();


?>
