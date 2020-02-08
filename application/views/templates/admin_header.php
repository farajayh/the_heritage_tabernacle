<!DOCTYPE html>
<html>
<link rel="icon" type="image/png" href="assets/img/ifara.png">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rhema Heritage Ministries Int'l</title>
    <link rel="stylesheet" href="assets/materialize/css/materialize.css">
    <link rel="stylesheet" href="assets/css/dosis-font.css">
    <link rel="stylesheet" href="assets/iconfont/material-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/slick/slick.css">
    <link rel="stylesheet" href="assets/slick/slick-theme.css">
    <script src="assets/js/jquery-3.2.1.js"></script>
    <script src="assets/materialize/js/materialize.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/slick/slick.min.js"></script>
</head>
<body>
<header class="navbar-fixed">
        <nav class="blue darken-3">
            <div class="nav-wrapper">
                <div class="container">
                    <a href="#!" class="brand-logo logo-margin">
                        <img width="60" src="assets/img/ifara.png" alt="">
                    </a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="brand-logo center">
                    <h4>Rhema Word Heritage Ministries Int'l Inc. </h4>
                    </ul>
                    <ul class="right hide-on-med-and-down">
                        <li class=" waves-effect waves-light active left-border right-border"><a href="<?php echo base_url().'admin';?>">Home</a></li>
                        <li class="waves-effect waves-light"><a href="<?php echo base_url().'admin/logout';?>">Log out</a></li>
                    </ul>

                </div>
                <ul class="side-nav" id="mobile-demo">
                    <li class="active"><a href="admin_page.php">HOME</a></li>
                    <li class="waves-effect waves-dark"><a href="<?php echo base_url().'admin/logout';?>">Log out</a></li>
                </ul>
            </div>
        </nav>
    </header>
