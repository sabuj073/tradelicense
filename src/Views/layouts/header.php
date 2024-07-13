<!DOCTYPE html>
<html lang="en">

<head>
    <base href="http://localhost/trade/public/"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-white ">
    <div class="container">
        <a class="navbar-brand logo " href="#">
            <img src="assets/img/logo.jpg" alt="">
            <span class="text_green">Techdyno BD LTD</span>
        </a>

    </div>
</nav>
<?php include_once __DIR__ . '/../frontend/banner.php'; ?>
<div class="container">
        <div class="row">
            <?php include __DIR__ . '/inc/left_sidebar.php'; ?>

            <main class="col-md-8 ms-sm-auto col-lg-8 px-md-4 content_bg ">
                <?php include __DIR__ . '/inc/navbar.php'; ?>
