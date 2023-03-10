<?php
require_once('../config.php');

if (isset($_POST["submit"])) {
    if (isset($_POST["username"]) && $_POST["password"]) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sqlLoginQuery = "SELECT * FROM users WHERE username= :username AND password='".$password."'";
        $stmt = $pdo->prepare($sqlLoginQuery);
        $stmt->execute(["username" => $username]);    
        $row = $stmt->fetch();
        if ($row === false) {   
            $_SESSION['failedLogin'] = true;
        } else {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $row['username']; 
        } 
        header("location: index.php");
    } 
}
?>