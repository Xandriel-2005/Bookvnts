<?php
include('include/header.php');
$usr_name = $_SESSION['usr_name'] ?? null;
if (!$usr_name) {
  echo "<script>alert('Please log in to view your profile.'); window.location.href='login.php';</script>";
  exit;
}
//event delete
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_evnt_no'])) {
  $evnt_no = intval($_POST['delete_evnt_no']);
  if (delete_event_and_bookings($conn, $evnt_no)) {
    echo "<script>alert('Event and its bookings deleted successfully.'); window.location.href='profile.php';</script>";
    exit;
  } else {
    echo "<script>alert('Failed to delete event.');</script>";
  }
}
// booking cancel
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cancel_bking_no'])) {
  $bking_no = intval($_POST['cancel_bking_no']);

  $booking_sql = "SELECT evnt_no, no_tkts FROM bookings WHERE bking_no = $bking_no";
  $booking_result = mysqli_query($conn, $booking_sql);
  $booking = mysqli_fetch_assoc($booking_result);
  if ($booking) {
    $evnt_no = $booking['evnt_no'];
    $no_tkts = $booking['no_tkts'];
    // update tickets left
    $update_sql = "UPDATE evnt_detail SET tkt_left= tkt_left +$no_tkts WHERE evnt_no = $evnt_no";
    $delete_sql = "DELETE FROM bookings WHERE bking_no= $bking_no";
    if(mysqli_query($conn, $update_sql) && mysqli_query($conn, $delete_sql)){
      echo "<script>alert('Booking cancelled successfully.'); window.location.href='profile.php';</script>";
      exit;
    }else{
      echo "<script>alert('Failed to cancel booking.');</script>";
    }
  }else{
    echo "<script>alert('Booking not found.');</script>";
  }
}
?>
<script src="assets/js/js-style.js"></script>
</br>
</br>
</br>
</br>
</br>
<div class="container mt-5">
  <h2 class="text-center mb-4">Manage Profile</h2>
  <!-- Nav Tabs -->
  <ul class="nav nav-tabs justify-content-center" id="profileTabs" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="bookings-tab" data-bs-toggle="tab" data-bs-target="#bookings" type="button" role="tab">My Bookings</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="events-tab" data-bs-toggle="tab" data-bs-target="#events" type="button" role="tab">My Events</button>
    </li>
  </ul>
  <!-- Tab Content -->
  <div class="tab-content mt-4" id="profileTabsContent">
    <!-- Bookings Tab -->
    <div class="tab-pane fade show active" id="bookings" role="tabpanel">
      <h4 class="mb-3">Tickets You've Booked</h4>
      <?php
      $usr_id = $_SESSION['usr_id'] ?? null;
      $bookings = get_user_bookings($conn, $usr_id);
      if ($bookings && mysqli_num_rows($bookings) > 0) {
        echo "<table class='table table-bordered'>";
        echo "<thead><tr>
                <th>Event</th>
                <th>Date</th>
                <th>Time</th>
                <th>Tickets</th>
                <th>Amount Paid</th>
                <th>Actions</th>
                </tr></thead><tbody>";
        while ($row = mysqli_fetch_assoc($bookings)) {
            echo "<tr>
                <td>{$row['evnt_title']}</td>
                <td>{$row['evnt_date']}</td>
                <td>{$row['evnt_time']}</td>
                <td>{$row['no_tkts']}</td>
                <td>₹" . ($row['no_tkts'] * $row['evnt_tkt_price']) . "</td>
                <td>
                <form method='POST' action='profile.php' onsubmit=\"return confirm('Cancel this booking?')\">
                    <input type='hidden' name='cancel_bking_no' value='{$row['bking_no']}'>
                    <button type='submit' class='btn btn-sm btn-outline-danger'>Cancel</button>
                </form>
                </td>
            </tr>";
        }
        echo "</tbody></table>";
      } else {
        echo "<div class='alert alert-info'>You haven't booked any tickets yet.</div>";
      }
      ?>
    </div>
    <!-- Events Tab -->
    <div class="tab-pane fade" id="events" role="tabpanel">
      <h4 class="mb-3">Events You've Created</h4>
      <?php
      $events = get_user_events($conn, $usr_name);
      if ($events && mysqli_num_rows($events) > 0) {
        echo "<table class='table table-bordered'>";
        echo "<thead><tr>
          <th>Title</th>
          <th>Type</th>
          <th>Date</th>
          <th>Venue</th>
          <th>Tickets Left</th>
          <th>Actions</th>
        </tr></thead><tbody>";
        while ($row = mysqli_fetch_assoc($events)) {
          $evnt_no = (int)$row['evnt_no'];
          $attendees_sql = "SELECT usr_id, no_tkts FROM bookings WHERE evnt_no = $evnt_no";
          $booking_result = mysqli_query($conn, $attendees_sql);

          $attendee_html = "<table class='table table-sm table-bordered'>
            <thead><tr><th>Name</th><th>Email</th><th>Contact</th><th>Tickets</th></tr></thead><tbody>";

          if (!$booking_result) {
            $attendee_html .= "<tr><td colspan='4'>Error fetching attendees: " . mysqli_error($conn) . "</td></tr>";
          } elseif (mysqli_num_rows($booking_result) > 0) {
            while ($booking = mysqli_fetch_assoc($booking_result)) {
              $usr_id = (int)$booking['usr_id'];
              $no_tkts = $booking['no_tkts'];

              $user_sql = "SELECT usr_name, email, contact FROM signup_frm_data WHERE `S.No.` = $usr_id";
              $user_result = mysqli_query($conn, $user_sql);
              $user = mysqli_fetch_assoc($user_result);

              $usr_name = $user['usr_name'] ?? 'Unknown';
              $email = $user['email'] ?? 'N/A';
              $contact = $user['contact'] ?? 'N/A';

              $attendee_html .= "<tr>
                <td>{$usr_name}</td>
                <td>{$email}</td>
                <td>{$contact}</td>
                <td>{$no_tkts}</td>
              </tr>";
            }
          } else {
            $attendee_html .= "<tr><td colspan='4'>No attendees yet.</td></tr>";
          }
          $attendee_html .= "</tbody></table>";
          echo "
            <tr>
              <td>{$row['evnt_title']}</td>
              <td>{$row['evnt_type']}</td>
              <td>{$row['evnt_date']}</td>
              <td>{$row['evnt_venue']}</td>
              <td>{$row['tkt_left']}</td>
              <td>
                <button type='button' class='btn btn-sm btn-outline-primary view-attendees-btn'
                        data-evnt-id='attendees-{$evnt_no}' data-bs-toggle='modal' data-bs-target='#attendeesModal'>
                  View Attendees
                </button>
                <div id='attendees-{$evnt_no}' class='d-none'>{$attendee_html}</div>
                <form method='POST' action='profile.php' class='d-inline'
                      onsubmit=\"return confirm('Are you sure you want to delete this event? This will remove all bookings too.')\">
                  <input type='hidden' name='delete_evnt_no' value='{$evnt_no}'>
                  <button type='submit' class='btn btn-sm btn-outline-danger'>Delete Event</button>
                </form>
              </td>
            </tr>";
        }
        echo "</tbody></table>";
      } else {
        echo "<div class='alert alert-info'>You haven't created any events yet.</div>";
      }
      ?>
    </div>
  </div>
  <!-- Attendees Modal -->
  <div class="modal fade" id="attendeesModal" tabindex="-1" aria-labelledby="attendeesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="attendeesModalLabel">Event Attendees</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="attendeesContent">
          <p class="text-muted">Loading attendees...</p>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const modalBody = document.getElementById('attendeesContent');
  document.querySelectorAll('.view-attendees-btn').forEach(button => {
    button.addEventListener('click', function () {
      const targetId = this.getAttribute('data-evnt-id');
      const content = document.getElementById(targetId)?.innerHTML || "<p>No data found.</p>";
      modalBody.innerHTML = content;
    });
  });
});
</script>
<?php 
include('include/footer.php');
?>