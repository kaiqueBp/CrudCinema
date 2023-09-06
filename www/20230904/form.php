<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (isset($_POST["login"]) && isset($_POST["senha"])) {
        if ($_POST["login"] == "felipe" && $_POST["senha"] == "perez") {
            $_SESSION["login"] = $_POST["login"];
        }
    }
}

header('Location: index.php');
die();
