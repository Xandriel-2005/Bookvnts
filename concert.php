<?php
include('include/header.php');
$sql = "SELECT * FROM evnt_detail WHERE evnt_type = 'Concert'";
$result = mysqli_query($conn, $sql);
?>
<div class="container mt-5 pt-4">
    <!-- Page Header from image -->
    <div class="page-header">
        <h1 class="page-title">Concerts & Live Pro-Nites</h1>
        <p class="page-subtitle">Experience electric collegiate headline tours, open-mic spoken word nights, and cultural festival stages across Tier-1 campuses nationwide.</p>
    </div>

    <!-- Filter Bar (mockup from image) -->
    <div class="filter-bar">
        <div class="filter-input">
            <i class="fa-solid fa-search"></i>
            <input type="text" placeholder="Search artist, band, campus, or venue...">
        </div>
        <div class="filter-input" style="flex: 0.5;">
            <i class="fa-solid fa-location-dot"></i>
            <select><option>All Circuits (Delhi NCR, BLR, BC)</option></select>
        </div>
    </div>

    <div class="row g-4">
      <?php while($row = mysqli_fetch_assoc($result)){ 
          // Format date for the badge
          $dateObj = date_create($row['evnt_date']);
          $month = date_format($dateObj, "M");
          $day = date_format($dateObj, "d");
          $timeStr = date_format(date_create($row['evnt_time']), "H:i");
      ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="event-card">
            <div class="event-card-img-wrapper">
                <img src="uploads/<?php echo $row['evnt_poster']; ?>" class="event-card-img" alt="Poster">
                <div class="date-badge">
                    <span><?php echo $month; ?></span>
                    <strong><?php echo $day; ?></strong>
                </div>
                <div class="status-badge hot">
                    <i class="fa-solid fa-fire"></i> Fast Filling
                </div>
            </div>
            
            <div class="event-card-body">
              <h3 class="event-card-title"><?php echo $row['evnt_title']; ?></h3>
              <div class="event-card-subtitle">
                <i class="fa-solid fa-ticket"></i> Campus Fast Pass
              </div>
              
              <div class="event-meta">
                  <i class="fa-solid fa-location-dot"></i> <?php echo $row['evnt_venue']; ?>
              </div>
              <div class="event-meta">
                  <i class="fa-regular fa-clock"></i> <?php echo $timeStr; ?> &bull; <?php echo $row['evnt_date']; ?>
              </div>

              <div class="event-divider"></div>

              <div class="event-footer">
                  <div class="event-price-col">
                      <div class="event-price-label">Campus Passes From</div>
                      <div class="event-price">₹<?php echo $row['evnt_tkt_price']; ?> <small>(Student ₹199)</small></div>
                  </div>
                  <div class="event-seats">120 Left</div>
              </div>

              <div class="event-actions">
                  <button type="button" class="btn btn-secondary-custom"
                    data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="auto"
                    title="Event Description" data-bs-content="<?php echo htmlspecialchars($row['evnt_dicpt']); ?>">More Info</button>
                  <a class="btn btn-accent" href="bk_tkts.php?evnt_no=<?= (int)$row['evnt_no'] ?>">Book Pass <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

    <!-- Secure Pass Banner -->
    <div class="info-banner">
        <div class="banner-icon">
            <i class="fa-solid fa-qrcode"></i>
        </div>
        <div class="banner-content">
            <span style="font-size: 10px; font-weight: 700; color: var(--secondary); text-transform: uppercase;">Safe Campus Pass</span>
            <h4>Secure Dynamic QR Passes.</h4>
            <p>Your Bookvnts QR refreshes dynamically every 30 seconds at the entry turnstile. Seamless entry without the hassle of physical tickets.</p>
        </div>
        <div class="banner-action">
            <button class="btn btn-primary" style="background: var(--text-primary) !important;">Learn More</button>
        </div>
    </div>

</div>
<script src="assets/js/js-style.js"></script>
<?php include('include/footer.php');
?>