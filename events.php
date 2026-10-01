<?php
include('include/header.php');
?>
<div class="container mt-5 pt-4">
    <!-- Page Header -->
    <div class="page-header text-center">
        <h1 class="page-title">Explore Categories</h1>
        <p class="page-subtitle mx-auto">Discover a world of electrifying live experiences, from blockbuster movie premieres to high-energy collegiate sports meets.</p>
    </div>

    <div class="row g-4 categories-row mb-5 pb-5">
        <div class="col-6 col-md-4">
            <a href="concert.php" class="category-card" style="padding: 40px 20px;">
                <div class="icon-circle text-primary-custom" style="width: 80px; height: 80px; font-size: 32px;"><i class="fa-solid fa-music"></i></div>
                <h5 style="font-size: 20px;">Concerts</h5>
            </a>
        </div>
        <div class="col-6 col-md-4">
            <a href="movies.php" class="category-card" style="padding: 40px 20px;">
                <div class="icon-circle" style="color: #8B5CF6; width: 80px; height: 80px; font-size: 32px;"><i class="fa-solid fa-clapperboard"></i></div>
                <h5 style="font-size: 20px;">Movies</h5>
            </a>
        </div>
        <div class="col-6 col-md-4">
            <a href="sports.php" class="category-card" style="padding: 40px 20px;">
                <div class="icon-circle" style="color: #3B82F6; width: 80px; height: 80px; font-size: 32px;"><i class="fa-solid fa-medal"></i></div>
                <h5 style="font-size: 20px;">Sports</h5>
            </a>
        </div>
        <div class="col-6 col-md-4">
            <a href="music.php" class="category-card" style="padding: 40px 20px;">
                <div class="icon-circle text-accent" style="width: 80px; height: 80px; font-size: 32px;"><i class="fa-solid fa-guitar"></i></div>
                <h5 style="font-size: 20px;">Musical Night</h5>
            </a>
        </div>
        <div class="col-6 col-md-4">
            <a href="awd_cer.php" class="category-card" style="padding: 40px 20px;">
                <div class="icon-circle" style="color: #EF4444; width: 80px; height: 80px; font-size: 32px;"><i class="fa-solid fa-award"></i></div>
                <h5 style="font-size: 20px;">Award Ceremony</h5>
            </a>
        </div>
        <div class="col-6 col-md-4">
            <a href="comedy.php" class="category-card" style="padding: 40px 20px;">
                <div class="icon-circle" style="color: #6366F1; width: 80px; height: 80px; font-size: 32px;"><i class="fa-solid fa-masks-theater"></i></div>
                <h5 style="font-size: 20px;">Comedy Shows</h5>
            </a>
        </div>
    </div>
</div>
<?php
include('include/footer.php');
?>