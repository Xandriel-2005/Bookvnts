<?php
include('include/header.php');
?>
<br/>
<br/>
<br/>
</br>
</br>
</br>
<!---------PageStart---->
<h2 class="text-center mb-4">Create New Event</h2>
<div class="container mt-5 mb-5">
    <form method="post" action="c_event.php" enctype="multipart/form-data">
        <div class="mb-5">
            <label>Event Title</label>
            <input type="text" name="evnt_title" class="form-control" required>
        </div>
        <div class="mb-5">
            <label>Event Type</label>
            <select class="form-select" name="evnt_type" required>
                <option value="">Select</option>
                <option>Movies</option>
                <option>Concert</option>
                <option>Musical Night</option>
                <option>Award Ceremony</option>
                <option>Sports</option>
                <option>Comedy Shows</option>
    </select>

        </div>
        <div class="mb-5">
            <label>Description</label>
            <textarea name="evnt_dicpt" class="form-control" required></textarea>
        </div>
        <div class="mb-5">
            <label>Venue</label>
            <input type="text" name="evnt_venue" class="form-control" required>
        </div>
        <div class="mb-5">
            <label>Date</label>
            <input type="date" name="evnt_date" class="form-control" required>
        </div>
        <div class="mb-5">
            <label>Time</label>
            <input type="time" name="evnt_time" class="form-control" required>
        </div>
        <div class="mb-5">
            <label>Poster</label>
            <input type="file" name="evnt_poster" class="form-control">
        </div>
        <div class="mb-5">
            <label>Total Tickets</label>
            <input type="number" name="evnt_tot_tkt" class="form-control" required>
        </div>
        <div class="mb-5">
            <label>Ticket Price</label>
            <input type="number" name="evnt_tkt_price" class="form-control" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary w-100">Create Event</button>
    </form>
</div>
</body>
</html>
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
