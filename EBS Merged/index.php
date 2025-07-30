<?php
include('config/config.php');
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
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/slideshow-2.jpg" class="d-block" style="width: 100%; height:100%">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/slideshow-3.jpg" class="d-block" style="width: 100%; height:100%">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/slideshow-4.jpg" class="d-block" style="width: 100%; height:100%">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/slideshow-5.jpg" class="d-block" style="width: 100%; height:100%">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/slideshow-6.jpg" class="d-block" style="width: 100%; height:100%">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/slideshow-7.jpg" class="d-block" style="width: 100%; height:100%">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
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
				<button type="submit" name="submit-1" class="btn btn-success w-100">Login</button>
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
				<button type="submit" name="submit-2" class="btn btn-success w-100">SignUp</button>
			</div>
        </form>
    </div>
</div>
</div>
<!--------Login/Signup Ends---->
<?php
include('include/footer.php');
?>
