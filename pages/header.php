<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/all.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
<?php //if(isset($_SESSION['id'])) { ?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="action.php?pages=home" class="nav-link">Home</a></li>
            <li><a href="action.php?pages=search" class="nav-link">Search</a></li>
            <li><a href="action.php?pages=upload" class="nav-link">Upload</a></li>
            <li class="dropdown">
                <a href="action.php?pages=register" class="nav-link dropdown-toggle" data-toggle="dropdown">User Name</a>
                <ul class="dropdown-menu">
                    <li><a href="action.php?pages=login" class="dropdown-item">Login</a></li>
                    <li><a href="action.php?pages=logout" class="dropdown-item">Log Out</a></li>
                </ul>
            </li>


        </ul>
    </div>
</nav>
