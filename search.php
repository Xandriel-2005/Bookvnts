<?php
include('include/header.php');

$search_query = isset($_GET['q']) ? mysqli_real_escape_string($conn, $_GET['q']) : '';

if($search_query != '') {
    $sql = "SELECT * FROM evnt_detail WHERE evnt_title LIKE '%$search_query%' OR evnt_venue LIKE '%$search_query%' OR evnt_type LIKE '%$search_query%' OR evnt_dicpt LIKE '%$search_query%'";
} else {
    $sql = "SELECT * FROM evnt_detail";
}
$result = mysqli_query($conn, $sql);
?>
<div class="container mt-5 pt-4">
    <!-- Page Header -->
    <div class="page-header text-center">
        <h1 class="page-title">Search Results</h1>
        <p class="page-subtitle mx-auto">Showing results for "<?php echo htmlspecialchars($search_query); ?>"</p>
    </div>

    <div class="row g-4 mb-5 pb-5">
      <?php if(mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)){ 
          // Format date for the badge
          $dateObj = date_create($row['evnt_date']);
          $month = date_format($dateObj, "M");
          $day = date_format($dateObj, "d");
          $timeStr = date_format(date_create($row['evnt_time']), "H:i A");
      ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="event-card">
            <div class="event-card-img-wrapper">
                <img src="uploads/<?php echo $row['evnt_poster']; ?>" class="event-card-img" alt="Poster">
                <div class="date-badge">
                    <span><?php echo $month; ?></span>
                    <strong><?php echo $day; ?></strong>
                </div>
                <div class="img-label"><?php echo $row['evnt_type']; ?></div>
            </div>
            
            <div class="event-card-body">
              <h3 class="event-card-title"><?php echo $row['evnt_title']; ?></h3>
              
              <div class="event-meta mt-3">
                  <i class="fa-solid fa-location-dot"></i> <?php echo $row['evnt_venue']; ?>
              </div>
              <div class="event-meta">
                  <i class="fa-regular fa-clock"></i> <?php echo $timeStr; ?> &bull; <?php echo $row['evnt_date']; ?>
              </div>

              <div class="event-divider"></div>

              <div class="event-footer">
                  <div class="event-price-col">
                      <div class="event-price-label">Passes From</div>
                      <div class="event-price">₹<?php echo $row['evnt_tkt_price']; ?></div>
                  </div>
              </div>

              <div class="event-actions">
                  <a class="btn btn-accent w-100" href="bk_tkts.php?evnt_no=<?= (int)$row['evnt_no'] ?>">Book Pass <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      <?php } } else { ?>
        <div class="col-12 text-center py-5">
            <i class="fa-solid fa-magnifying-glass mb-3" style="font-size: 48px; color: var(--border);"></i>
            <h4>No events found</h4>
            <p class="text-muted">Try adjusting your search terms or browse our categories.</p>
            <a href="events.php" class="btn btn-dark-custom mt-3">Browse Events</a>
        </div>
      <?php } ?>
    </div>
</div>
<?php include('include/footer.php'); ?>
