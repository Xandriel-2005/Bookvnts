<?php
include('config/config.php');
include('include/header.php');
?>
<div class="event">
  <h1>Events in Your City</h1>
  <div class="events-row">
    <button class="show"><i class="fa-solid fa-clapperboard"style = "font-size:100px"></i><br>Movies</button>
    <button class="show"><i class="fa-solid fa-award"style = "font-size:100px"></i><br>Award Ceremony</button>
    <button class="show"><img src="assets/images/mic.png"><br>Concert</button>
  </div>
  <div class="events-row">
    <button class="show"><i class="fa-solid fa-music"style = "font-size:100px"></i><br>Musical Night</button>
    <button class="show"><i class="fa-solid fa-medal"style = "font-size:100px"></i><br>Sports</button>
    <button class="show"><i class="fa-solid fa-masks-theater"style = "font-size:100px"></i><br>Comedy Show</button>
  </div>
</div>
<?php
include('include/footer.php');
?>