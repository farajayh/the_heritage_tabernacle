<!DOCTYPE html>
<html lang="">
<link rel="icon" type="image/png" href="assets/img/ifara.png">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
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
    <script>
        $(document).ready(function () {
            $('.carousel').carousel({
                fullHeight: true
            });
        });
    </script>
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
                    <ul class="right hide-on-med-and-down">
                        <li class=" waves-effect waves-light"><a href="index.php">HOME</a></li>
                        <li class="waves-effect waves-light"><a href="<?php echo base_url().'about';?>">ABOUT US</a></li>
                        <li class="waves-effect waves-light"><a href="<?php echo base_url().'guidelight_literature';?>">GUIDELIGHT LITERATURE</a></li>
                        <li class="waves-effect waves-light"><a href="<?php echo base_url().'world_evangelism';?>">WORLD EVANGELISM</a></li>
                        <li class="waves-effect waves-light"><a href="<?php echo base_url().'contact';?>">CONTACT US</a></li>
                    </ul>

                </div>
                <ul class="side-nav" id="mobile-demo">
                    <li class="active"><a href="index.html">HOME</a></li>
                    <li class="waves-effect waves-dark"><a href="<?php echo base_url().'about';?>">ABOUT US</a></li>
                    <li class="waves-effect waves-dark"><a href="<?php echo base_url().'guidelight_literature';?>">GUIDELIGHT LITERATURE</a></li>
                    <li class="waves-effect waves-dark"><a href="<?php echo base_url().'world_evangelism';?>">WORLD EVANGELISM</a></li>
                    <li class="waves-effect waves-dark"><a href="<?php echo base_url().'contact';?>">CONTACT US</a></li>>
                </ul>
            </div>
        </nav>
    </header>