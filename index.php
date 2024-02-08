<?php
// Start the session
session_start();

if(isset($_SESSION["name"])){
    header("Location: ./home.php");
}else{
    header("Location: login.php");
}