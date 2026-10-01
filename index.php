<?php
include('include/header.php');
?>
    <!-----Carousel Starts------>
    <div id="sld-shw" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#sld-shw" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#sld-shw" data-bs-slide-to="1" class="active"></button>
            <button type="button" data-bs-target="#sld-shw" data-bs-slide-to="2" class="active"></button>
            <button type="button" data-bs-target="#sld-shw" data-bs-slide-to="3" class="active"></button>
            <button type="button" data-bs-target="#sld-shw" data-bs-slide-to="4" class="active"></button>
            <button type="button" data-bs-target="#sld-shw" data-bs-slide-to="5" class="active"></button>
            <button type="button" data-bs-target="#sld-shw" data-bs-slide-to="6" class="active"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/slideshow-1.jpg" class="d-block" style="width: 100%; height:100%">
                <div class="carousel-caption">
                    <h3>Discover Exciting Events</h3>
                    <p>From concerts to comedy, find it all in one place</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/slideshow-2.jpg" class="d-block" style="width: 100%; height:100%">
                <div class="carousel-caption">
                    <h3>Your Pass to Entertainment</h3>
                    <p>Book your next unforgettable experience now!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/slideshow-3.jpg" class="d-block" style="width: 100%; height:100%">
                <div class="carousel-caption">
                    <h3>Lights. Music. Action!</h3>
                    <p>Dive into the vibe of live performances and shows.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/slideshow-4.jpg" class="d-block" style="width: 100%; height:100%">
                <div class="carousel-caption">
                    <h3>Moments That Matter</h3>
                    <p>Celebrate life, one event at a time</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/slideshow-5.jpg" class="d-block" style="width: 100%; height:100%">
                <div class="carousel-caption">
                    <h3>Experience the Magic</h3>
                    <p>Explore trending events around you with ease</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/slideshow-6.jpg" class="d-block" style="width: 100%; height:100%">
                <div class="carousel-caption">
                    <h3>Your Event, Your Way</h3>
                    <p>Pick your seat, pick your time – we make it easy</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/slideshow-7.3.jpg" class="d-block" style="width: 100%; height:100%">
                <div class="carousel-caption">
                    <h3>Join the Buzz!</h3>
                    <p>Be a part of something amazing</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#sld-shw" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#sld-shw" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <!-------Carousel Ends-------->
<!-------Login/Signup Start--------->
<div class="container mt-4">
    <h3 class="text-center">LogIn / Register</h3>
    <ul class="nav nav-tabs mt-4">
    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#login">Login</a></li>
    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#signup">Sign up</a></li>
    </ul>
<div class="tab-content">
    <div id="login" class="container tab-pane active"><br/>
        <form method="post" action="login.php" enctype="multipart/form-data">
            <div class="mb-5">
                <label><i class="bi bi-person"></i></label>
                <input type="text" name="usr_id" placeholder="Enter Your User-Id" class="form-control">
            </div>
			<div class="mb-5">
				<label><i class="bi bi-key"></i></label>
				<input type="password" name="password" placeholder="**************" class="form-control">
            </div>
			<div class="mb-5">
				<button type="submit" name="submit" class="btn btn-success w-100">Login</button>
			</div>
        </form>    
    </div>
    <div id="signup" class="container tab-pane fade"><br/>
        <form method="post" action="signup.php" enctype="multipart/form-data">
            <div class="mb-5">
				<label><i class="bi bi-envelope"></i></label>
				<input type="text" name="email" placeholder="Enter Email" class="form-control">
			</div>
            <div class="mb-5">
                <label><i class="bi bi-person"></i></label>
                <input type="text" name="usr_id" placeholder="Enter Your User-Id" class="form-control">
            </div>
			<div class="mb-5">
				<label><i class="bi bi-phone"></i></label>
				<input type="text" name="contact" placeholder="Enter Contact Number" class="form-control">
			</div>
			<div class="mb-5">
				<label>Upload Id</label>
				<input type="file" name="image" class="form-control">
			</div>
			<div class="mb-5">
				<label>Enter Password</label>
				<input type="password" name="password" placeholder="**************" class="form-control">
			</div>
			<div class="mb-5">
				<label>Confirm Password</label>
				<input type="password" name="cpassword" placeholder="**************" class="form-control">
			</div>
			<div class="mb-5">
				<button type="submit" name="submit-2" class="btn btn-success w-100 mb-5">SignUp</button>
			</div>
        </form>
    </div>
</div>
</div>
<!--------Login/Signup Ends---->
<?php
include('include/footer.php');
?>