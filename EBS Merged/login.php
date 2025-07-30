<?php
include('config/config.php');
include('include/header.php');
?>
    <!----loginStarts--------->
    <div class="container">
    <h3 class="text-center">LogIn</h3>
    <form method="post" action="login.php" enctype="multipart/form-data">
            <div class="mb-5">
                <label>Enter User name</label>
                <input type="text" name="usr_id" placeholder="Enter Your User-Id" class="form-control">
            </div>
			<div class="mb-5">
				<label>Enter your Password</label>
				<input type="password" name="password" placeholder="**************" class="form-control">
			</div>
			<div class="mb-5">
				<button type="submit" name="submit" class="btn btn-success w-100">LogIn</button>
			</div>
    </form>
</div>
<?php
include('include/footer.php');
?>