<?php
include('include/header.php');
?>
<div class="event">
  <h1>Events</h1>
  <div class="events-row">
     <a href = "movies.php"><button class="shw" style="background-color: #F4A300;"><i class="fa-solid fa-clapperboard"style = "font-size:100px"></i><br>Movies</button></a>
     <a href = "awd_cer.php"><button class="shw" style="background-color: #D95C39;"><i class="fa-solid fa-award"style = "font-size:100px"></i><br>Award Ceremony</button>
     <a href = "concert.php"><button class="shw" style="background-color: #F4A300;"><img src="assets/images/mic.png"><br>Concert</button>
  </div>
  <div class="events-row">
     <a href = "music.php"><button class="shw" style="background-color: #D95C39;"><i class="fa-solid fa-music"style = "font-size:100px"></i><br>Musical Night</button>
     <a href = "sports.php"><button class="shw" style="background-color: #F4A300;"><i class="fa-solid fa-medal"style = "font-size:100px"></i><br>Sports</button>
     <a href = "comedy.php"><button class="shw" style="background-color: #D95C39;"><i class="fa-solid fa-masks-theater"style = "font-size:100px"></i><br>Comedy Show</button>
  </div>
</div>
<?php
include('include/footer.php');
?>