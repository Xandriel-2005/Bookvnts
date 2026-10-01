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
    <!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media='screen' href="assets/css/style.css">
</head>
<body>
    <!---------TopHeaderStarts-------->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white" style="box-shadow: 0 1px 3px 0 rgba(15, 23, 42, 0.04); border-bottom: 1px solid var(--border);">
        <div class="container-fluid px-4">
            <!-- Left: Logo -->
            <a class="navbar-brand me-4" href="index.php">
                <img src="assets/images/logo-long.png" alt="Bookvnts" style="height: 32px; object-fit: contain;">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="menu">
                <!-- Center: Global Search Bar -->
                <form class="d-none d-lg-flex mx-auto" style="flex: 1; max-width: 480px;">
                    <div class="input-group global-search">
                        <span class="input-group-text bg-light border-0 text-muted"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control bg-light border-0 shadow-none" placeholder="Search fests, pro-nites, artists..." style="font-size: 14px; font-weight: 500;">
                        <span class="input-group-text bg-light border-0"><kbd class="bg-white text-muted border" style="font-family: inherit; font-size: 11px;">⌘K</kbd></span>
                    </div>
                </form>

                <!-- Right: Navigation Links -->
                <ul class="navbar-nav ms-auto align-items-center gap-3">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="events.php" data-bs-toggle="dropdown" aria-expanded="false">Events</a>
                        <ul class="dropdown-menu border-0 shadow-sm" style="border-radius: 12px; margin-top: 10px;">
                            <li><a class="dropdown-item" href="movies.php">Movies</a></li>
                            <li><a class="dropdown-item" href="music.php">Musical Night</a></li>
                            <li><a class="dropdown-item" href="comedy.php">Comedy Shows</a></li>
                            <li><a class="dropdown-item" href="concert.php">Concert</a></li>
                            <li><a class="dropdown-item" href="awd_cer.php">Award Ceremony</a></li>
                            <li><a class="dropdown-item" href="sports.php">Sports</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="<?php echo isset($_SESSION['usr_id']) ? 'bk_tkts.php' : 'login.php'; ?>" class="nav-link">Book Tickets</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    
                    <div class="vr mx-2 d-none d-lg-block" style="opacity: 0.1;"></div>
                    
                    <li class="nav-item"><a href="#" class="nav-link text-muted"><i class="fa-regular fa-bell"></i></a></li>
                    
                    <?php if (isset($_SESSION['usr_id'])): ?>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle d-flex align-items-center gap-2 p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="icon-circle bg-primary-soft text-primary-custom m-0" style="width: 32px; height: 32px; font-size: 14px;"><i class="fa-regular fa-user"></i></div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm" style="border-radius: 12px; margin-top: 10px;">
                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                <li><a class="dropdown-item" href="c_event.php">Create Event</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="post" class="px-3 py-1 m-0">
                                        <button type="submit" name="logout" class="btn btn-outline-danger btn-sm w-100 rounded-pill">Sign Out</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="login.php" class="icon-circle bg-light text-secondary m-0 text-decoration-none d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; font-size: 14px;"><i class="fa-regular fa-user"></i></a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <style>
        .global-search { border-radius: 9999px; overflow: hidden; border: 1px solid var(--border); }
        .global-search .input-group-text, .global-search .form-control { background: #F8FAFC !important; }
        .global-search .form-control:focus { background: #FFFFFF !important; }
        .nav-link { font-size: 14px !important; font-weight: 600 !important; color: var(--text-secondary) !important; padding: 8px 12px !important; }
        .nav-link:hover { color: var(--text-primary) !important; }
        .dropdown-item { font-weight: 500; font-size: 14px; padding: 8px 20px; transition: all 0.2s; }
        .dropdown-item:hover { background: #F8FAFC; color: var(--primary); }
    </style>
    <!-------TopHeaderEnds------>