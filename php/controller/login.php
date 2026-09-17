<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username == "johan" && $password == "johan") {
            echo "Login succes";
        } else {
            echo "Login failed";
        }
    }
?>