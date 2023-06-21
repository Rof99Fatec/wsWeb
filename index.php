<?php
    include_once("app.php");

    $_SESSION['user'] = "TESTE";
    $page = (isset($_SESSION['user'])) ? "home.php": "login.php";

    header("Location: lib/view/$page");
