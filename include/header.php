<?php 
include('config/config.php');
include('include/function.php');
if($_SERVER['REQUEST_METHOD']==='POST' &&isset($_POST['logout'])){
logout();
}
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
    <nav class="navbar navbar-expand-sm navbar-light fixed-top text-white bg-light">
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
                            <li><a class="dropdown-item" href="movies.php">Movies</a></li>
                            <li><a class="dropdown-item" href="music.php">Musical Night</a></li>
                            <li><a class="dropdown-item" href="comedy.php">Comedy Shows</a></li>
                            <li><a class="dropdown-item" href="concert.php">Concert</a></li>
                            <li><a class="dropdown-item" href="awd_cer.php">Award Ceremony</a></li>
                            <li><a class="dropdown-item" href="sports.php">Sports</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo isset($_SESSION['usr_id']) ? 'bk_tkts.php' : 'login.php'; ?>" class="nav-link">BookTickets</a>
                    </li>
                    <li class="menu-item">
                        <a href="about.php" class="nav-link">AboutUs</a>
                    </li>
                    <?php if (isset($_SESSION['usr_id'])): ?>
                        <li class="menu-item d-flex align-items-center gap-2">
                            <a href="profile.php" class="btn btn-light rounded-circle p-2" title="View Profile"><i class="fa-regular fa-user"></i></a>
                            <form method="post" style="display:inline;">
                                <button type="submit" name="logout" class="btn btn-outline-danger">Sign Out</button>
                            </form>
                        </li>
                    <?php endif; ?>
                </ul>
                <?php if (isset($_SESSION['usr_id'])): ?>
    <a href="c_event.php">
        <button type="button" class="btn btn-primary btn-txt">Create Event</button>
    </a>
<?php else: ?>
    <button type="button" class="btn btn-outline-secondary btn-txt" onclick="alert('Please log in to create an event.')">
        Create Event
    </button>
<?php endif; ?>

            </div>
        </div>
    </nav>
    <!-------TopHeaderEnds------>