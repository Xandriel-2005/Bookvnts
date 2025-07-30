<?php 
include('config/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookvnts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" media='screen' href="assets/css/style.css">
    <!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <!---------TopHeaderStarts-------->
    <nav class="navbar navbar-expand-sm navbar-light fixed-top bg-light text-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo-long.png" class="logo-img">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="menu-list navbar-nav d-flex flex-sm-row flex-column justify-content-center mx-auto text-center">
                    <li class="menu-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="menu-item nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="events.php">Events</a>
                        <ul class="dropdown-menu position-absolute pt-0">
                            <li><a class="dropdown-item" href="#">Link</a></li>
                            <li><a class="dropdown-item" href="#">Another link</a></li>
                            <li><a class="dropdown-item" href="#">A third link</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="nav-link">BookTickets</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="nav-link">AboutUs</a>
                    </li>
                </ul>
                <button type="button" class="btn btn-primary btn-txt">Create Event</button>
            </div>
        </div>
    </nav>
    <!-------TopHeaderEnds------>