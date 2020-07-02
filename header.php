<?php 

    # Session
    session_start();

    # Database
    require_once("db.php");
    require_once("db_fun.php");

?>
<!DOCTYPE html>
<html>
<head>
    <!-- Set Title -->
    <title>Simple CMS</title>

    <!-- META --> 
    <meta charset="utf-8">
    <!-- CSS --> 
    <link rel="stylesheet" type="text/css" href="css/fa/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />  
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <!-- JS --> 
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-form-validation.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

</head>
<body>
<!-- Menu -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <div class="container">
        <a href="index.php" class="navbar-brand">Simple CMS</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-menu">
        <ul class="navbar-nav ml-auto">
            <li class="navbar-item">
                <a href="index.php" class="btn btn-link"><i class="fa fa-list"></i> All Users</a>
            </li>
            <li class="navbar-item">
                <a href="add_user.php" class="btn btn-link"><i class="fa fa-plus"></i> Add new User</a>
            </li>
            <li class="navbar-item">
                <a href="manage.php" class="btn btn-link"><i class="fa fa-globe"></i> Manage Users</a>
            </li>
        </ul>
        </div>
    </div>
</nav>

