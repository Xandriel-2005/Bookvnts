<?php
function EmailValidation($email){
	return filter_var($email, FILTER_VALIDATE_EMAIL)!== false;
}
function BrowserAgent(){
	return $_SERVER['HTTP_USER_AGENT'];
}
function Userip(){
	return $_SERVER['REMOTE_ADDR'];
}
function logout(){
    if (session_status()===PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['session_no'])) {
        $session_end =date('H:i:s');
        $session_id =intval($_SESSION['session_no']);
        global $conn;
        $update_sql = "UPDATE login_details SET session_end = '$session_end' WHERE session_no = $session_id";
        mysqli_query($conn, $update_sql);
    }
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit;
}
function get_event_by_id($conn, $evnt_no) {
  $sql = "SELECT evnt_title, evnt_type, evnt_poster, evnt_tkt_price, tkt_left FROM evnt_detail WHERE evnt_no = $evnt_no";
  $result = mysqli_query($conn, $sql);
  return mysqli_fetch_assoc($result);
}

function book_tickets($conn, $usr_id, $evnt_no, $no_tkts) {
  $event = get_event_by_id($conn, $evnt_no);
  if (!$event || $no_tkts > $event['tkt_left']) return false;

  $insert = "INSERT INTO bookings (usr_id, evnt_no, no_tkts) VALUES ($usr_id, $evnt_no, $no_tkts)";
  $update = "UPDATE evnt_detail SET tkt_left = " . ($event['tkt_left'] - $no_tkts) . " WHERE evnt_no = $evnt_no";

  return mysqli_query($conn, $insert) && mysqli_query($conn, $update);
}
function get_user_bookings($conn, $usr_id) {
  $sql = "SELECT b.bking_no, b.no_tkts, e.evnt_no, e.evnt_title, e.evnt_date, e.evnt_time, e.evnt_tkt_price
          FROM bookings b
          JOIN evnt_detail e ON b.evnt_no = e.evnt_no
          WHERE b.usr_id = $usr_id
          ORDER BY e.evnt_date DESC";
  return mysqli_query($conn, $sql);
}
function get_user_events($conn, $usr_name) {
  $sql = "SELECT evnt_no, evnt_title, evnt_type, evnt_date, evnt_venue, tkt_left FROM evnt_detail WHERE usr_name = '$usr_name' ORDER BY evnt_date DESC";
  return mysqli_query($conn, $sql);
}
function delete_event_and_bookings($conn, $evnt_no) {
  $evnt_no = intval($evnt_no);
  $delete_bookings = "DELETE FROM bookings WHERE evnt_no = $evnt_no";
  $delete_event = "DELETE FROM evnt_detail WHERE evnt_no = $evnt_no";
  return mysqli_query($conn, $delete_bookings) && mysqli_query($conn, $delete_event);
}
?>