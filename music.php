<?php
include('include/header.php');
$sql = "SELECT * FROM evnt_detail WHERE evnt_type = 'Musical Night'";
$result = mysqli_query($conn, $sql);
?>
  <div class="event">
    <h1>Musical Night</h1>
  </div>
  <div class="container mt-5 pt-5">
    <div class="row">
      <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <div class="col-md-3 mb-4">
          <div class="card h-100 text-center">
            <img src="uploads/<?php echo $row['evnt_poster']; ?>" class="card-img-top" alt="Poster">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['evnt_title']; ?></h5>
              <p class="text-muted mb-1"><strong>Venue:</strong> <?php echo $row['evnt_venue']; ?></p>
              <p class="text-muted"><strong>Date:</strong> <?php echo $row['evnt_date']; ?></p>
              <p class="text-muted"><strong>Time:</strong> <?php echo $row['evnt_time']; ?></p>
                <a class="btn btn-primary" href="bk_tkts.php?evnt_no=<?= (int)$row['evnt_no'] ?>">Book</a>
                <button type="button" class="btn btn-outline-secondary btn-sm mt-2"
                data-bs-toggle="popover" data-bs-trigger="click" data-bs-placement="auto"
                title="Event Description" data-bs-content="<?php echo htmlspecialchars($row['evnt_dicpt']); ?>">More Info</button>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
<script src="assets/js/js-style.js"></script>
<?php include('include/footer.php');
?>