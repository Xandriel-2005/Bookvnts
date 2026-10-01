<?php
include('include/header.php');
?>
<div class="container mt-5 pt-5 pb-5 d-flex justify-content-center">
    <div class="login-hub-card" style="width: 100%; max-width: 650px;">
        <div class="text-center mb-4">
            <div class="icon-circle mx-auto mb-3" style="width: 56px; height: 56px; background: #ECFDF5; color: #047857; font-size: 20px;"><i class="fa-solid fa-calendar-plus"></i></div>
            <h2 class="section-title" style="font-size: 24px;">Host a Campus Event</h2>
            <p class="text-muted small">List your pro-nite or cultural fest seamlessly.</p>
        </div>
        
        <form method="post" action="c_event.php" enctype="multipart/form-data">
            <div class="row g-3 mb-3">
                <div class="col-md-7">
                    <label class="form-label text-muted small fw-bold" style="font-size: 11px;">Event Title</label>
                    <input type="text" name="evnt_title" class="form-control bg-light border-0" placeholder="e.g. Sunburn Campus Beats" style="padding: 12px 16px;" required>
                </div>
                <div class="col-md-5">
                    <label class="form-label text-muted small fw-bold" style="font-size: 11px;">Event Type</label>
                    <select class="form-select bg-light border-0" name="evnt_type" style="padding: 12px 16px;" required>
                        <option value="">Select Category</option>
                        <option>Movies</option>
                        <option>Concert</option>
                        <option>Musical Night</option>
                        <option>Award Ceremony</option>
                        <option>Sports</option>
                        <option>Comedy Shows</option>
                    </select>
                </div>
            </div>
            
            <div class="mb-3">
                <label class="form-label text-muted small fw-bold" style="font-size: 11px;">Description</label>
                <textarea name="evnt_dicpt" class="form-control bg-light border-0" rows="3" placeholder="Describe the event, artists, and schedule..." style="padding: 12px 16px;" required></textarea>
            </div>
            
            <div class="mb-3">
                <label class="form-label text-muted small fw-bold" style="font-size: 11px;">Venue</label>
                <input type="text" name="evnt_venue" class="form-control bg-light border-0" placeholder="e.g. OAT Amphitheater" style="padding: 12px 16px;" required>
            </div>
            
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label class="form-label text-muted small fw-bold" style="font-size: 11px;">Date</label>
                    <input type="date" name="evnt_date" class="form-control bg-light border-0" style="padding: 12px 16px;" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label text-muted small fw-bold" style="font-size: 11px;">Time</label>
                    <input type="time" name="evnt_time" class="form-control bg-light border-0" style="padding: 12px 16px;" required>
                </div>
            </div>
            
            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <label class="form-label text-muted small fw-bold" style="font-size: 11px;">Total Passes</label>
                    <input type="number" name="evnt_tot_tkt" class="form-control bg-light border-0" placeholder="Capacity" style="padding: 12px 16px;" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label text-muted small fw-bold" style="font-size: 11px;">Price (₹)</label>
                    <input type="number" name="evnt_tkt_price" class="form-control bg-light border-0" placeholder="e.g. 499" style="padding: 12px 16px;" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label text-muted small fw-bold" style="font-size: 11px;">Upload Poster</label>
                    <input type="file" name="evnt_poster" class="form-control bg-light border-0" style="padding: 9px 12px;">
                </div>
            </div>
            
            <button type="submit" name="submit" class="btn btn-accent w-100 py-3">Publish Event</button>
        </form>
    </div>
</div>
<?php
if(isset($_POST['submit'])){
    // check if user is logged in 
    $usr_name = $_SESSION['usr_name']?? null;
    if(!$usr_name){
        echo '<script>alert("User not logged in. Cannot create event."); window.location.href="login.php";</script>';
        exit;
    }
    // to  get data from form
    $event_name = $_POST['evnt_title'];
    $event_type = $_POST['evnt_type'];
    $event_description = $_POST['evnt_dicpt'];
    $venue = $_POST['evnt_venue'];
    $event_date = $_POST['evnt_date'];
    $event_time = $_POST['evnt_time'];
    $total_tickets = $_POST['evnt_tot_tkt'];
    $ticket_price = $_POST['evnt_tkt_price'];
    // for poster
    $poster_name = $_FILES['evnt_poster']['name'];
    $poster_tmp = $_FILES['evnt_poster']['tmp_name'];
    $poster_ext = strtolower(pathinfo($poster_name, PATHINFO_EXTENSION));
    $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];

    if(in_array($poster_ext, $allowed_ext)){
        $poster_new_name = uniqid() . '.' . $poster_ext;
        $upload_path = "uploads/" . $poster_new_name;

        if(!file_exists("uploads")) {
            mkdir("uploads", 0777, true);
        }

        if(move_uploaded_file($poster_tmp, $upload_path)){
            // Insert into database
            $sql = "INSERT INTO evnt_detail (usr_name, evnt_title, evnt_type, evnt_dicpt, evnt_venue, evnt_date, evnt_time, evnt_poster, evnt_tot_tkt, tkt_left, evnt_tkt_price) 
                    VALUES ('$usr_name', '$event_name', '$event_type', '$event_description', '$venue', '$event_date', '$event_time', '$poster_new_name', $total_tickets, $total_tickets, $ticket_price)";
            
            if(mysqli_query($conn, $sql)){
                echo '<script>alert("Event created successfully!"); window.location.href="events.php";</script>';
            } else {
                echo '<script>alert("Database error: ' . mysqli_error($conn) . '");</script>';
            }
        } else {
            echo '<script>alert("Failed to upload poster.");</script>';
        }
    } else {
        echo '<script>alert("Invalid poster format. Only JPG, PNG, GIF allowed.");</script>';
    }
}
include('include/footer.php');
?>
