<?php
include('include/header.php');
if (!isset($_SESSION['usr_id'])) {
  echo "<script>
    alert('Please log in to book tickets.');
    window.location.href = 'login.php';
  </script>";
  exit;
}
$usr_id = $_SESSION['usr_id'] ?? null;
$evnt_no = (int)($_GET['evnt_no'] ?? $_POST['evnt_no'] ?? 0);
if (!$usr_id || !$evnt_no) {
  echo "</br></br></br></br><div class='alert alert-danger text-center mt-4'>Missing user or event info.</div>";
  include('include/footer.php');
  exit;
}
$event=get_event_by_id($conn, $evnt_no);
if (!$event) {
  echo "</br></br></br></br><div class='alert alert-warning text-center mt-4'>Event not found for evnt_no = $evnt_no</div>";
  include('include/footer.php');
  exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['update_total'])) {
  $no_tkts = (int)($_POST['no_tkts'] ?? 0);
  if ($no_tkts >= 1 && $no_tkts <= 5) {
    if (book_tickets($conn, $usr_id, $evnt_no, $no_tkts)) {
      echo "</br></br></br></br><div class='alert alert-success text-center mt-4'>Booking successful! You paid ₹" . ($event['evnt_tkt_price'] * $no_tkts) . "</div>";
      $event = get_event_by_id($conn, $evnt_no);
    } else {
      echo "</br></br></br></br><div class='alert alert-danger text-center mt-4'>Booking failed or not enough tickets left.</div>";
    }
  } else {
    echo "</br></br></br></br><div class='alert alert-warning text-center mt-4'>Select 1–5 tickets.</div>";
  }
}
?>
</br>
</br>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-sm border-0">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="uploads/<?= htmlspecialchars($event['evnt_poster']) ?>" class="img-fluid rounded-start" alt="Event Poster">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?= htmlspecialchars($event['evnt_title']) ?> <small class="text-muted">(<?= htmlspecialchars($event['evnt_type']) ?>)</small></h5>
              <p class="mb-1"><strong>Ticket Price:</strong> ₹<span id="price" data-price="<?= $event['evnt_tkt_price'] ?>"><?= $event['evnt_tkt_price'] ?></span></p>
              <p class="mb-3"><strong>Tickets Left:</strong> <?= $event['tkt_left'] ?></p>            
              <form method="post">
                <input type="hidden" name="evnt_no" value="<?= $evnt_no ?>">
                <div class="mb-3">
                  <label for="no_tkts" class="form-label">Number of Tickets</label>
                  <div class="input-group">
                    <input type="number" name="no_tkts" id="no_tkts" class="form-control" min="1" max="10" value="<?= htmlspecialchars($_POST['no_tkts'] ?? 1) ?>">
                    <button type="submit" name="update_total" class="btn btn-outline-secondary" title="Update Total"><i class="fa-solid fa-arrows-rotate"></i></button>
                  </div>
                      <?php
                      $no_tkts = (int)($_POST['no_tkts'] ?? 1);
                      $total_amount = $event['evnt_tkt_price'] * $no_tkts;
                      ?>
                      <p class="mt-2"><strong>Total Amount:</strong> ₹<span><?= $total_amount ?></span></p>
                </div>
                <div class="d-grid">
                  <button type="submit" class="btn btn-success">Confirm Booking</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('include/footer.php');
?>