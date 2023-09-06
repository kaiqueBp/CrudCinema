<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (isset($_POST["name"])) {
        $_SESSION["name"] = $_POST["name"];
    }
}

header('Location: index.php');
die();