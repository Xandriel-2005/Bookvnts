<?php
include('include/header.php');
?>
    <!-------Signup Starts------>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="container">
    <h3 class="text-center">Register</h3>
    <form method="post" action="signup.php" enctype="multipart/form-data">
            <div class="mb-5">
				<label>Enter your Email</label>
				<input type="text" name="email" placeholder="Enter Email here" class="form-control">
			</div>
            <div class="mb-5">
                <label>Enter User name</label>
                <input type="text" name="usr_id" placeholder="Enter Your User-Id" class="form-control">
            </div>
			<div class="mb-5">
				<label>Enter your Contact No.</label>
				<input type="text" name="contact" placeholder="Enter Contact Number here" class="form-control">
			</div>
			<div class="mb-5">
				<label>Upload Id</label>
				<input type="file" name="image" class="form-control">
			</div>
			<div class="mb-5">
				<label>Enter your Password</label>
				<input type="password" name="password" placeholder="**************" class="form-control">
			</div>
			<div class="mb-5">
				<label>Confirm Password</label>
				<input type="password" name="cpassword" placeholder="**************" class="form-control">
			</div>
			<div class="mb-5">
				<button type="submit" name="submit-2" class="btn btn-success w-100">SignUp</button>
                </br>
                <p>Account Already Exists? | <a href="login.php">Log In </a></p>
			</div>
    </form>
</div>
    <!-------Signup Ends------>

<?php
include('include/footer.php');
//to get data from the form
if(isset($_REQUEST['submit-2'])=='submit-2'){
    $email=$_REQUEST['email'];
    $usr_id=$_REQUEST['usr_id'];
    $contact=$_REQUEST['contact'];
    $password=$_REQUEST['password'];
    $cpassword=$_REQUEST['cpassword'];
//to check if any required field is empty
if(!empty($email)&&!empty($usr_id)&&!empty($contact)&&!empty($password)&&!empty($cpassword)){
    //to check if correct data type is entered in every field
    if(EmailValidation($email)){
        if (preg_match("/^[a-zA-Z0-9_]*$/", $usr_id)){
            if(is_numeric($contact)){
                // to check if user already exists
                $check = mysqli_query($conn, "SELECT * FROM signup_frm_data WHERE email='$email' OR usr_name='$usr_id'");
                    if(mysqli_num_rows($check)>0){
                        echo '<script>alert("User already exists. Please log in.");</script>';
                        exit();
                    }
                    if($password===$cpassword){
                        $pass=md5($password);
                        $reg_date=date('d-m-y h:i:s');
                        $BrowserAgent=BrowserAgent();
                        $user_ip=Userip();
                        $sql="INSERT INTO signup_frm_data(email,usr_name,contact,password,reg_date,browser_agent,user_ip,status,flag) VALUES('$email','$usr_id','$contact','$pass','$reg_date','$BrowserAgent','$user_ip',1,0)";
                        //to check if data has been recorded in database
                        if(mysqli_query($conn,$sql)){
                            echo'<script src="assets/js/js-style.js"></script>';
                            echo '<script>redirectToEventPage();</script>';
                        }else{
                            echo '<script>alert("Record was not inserted in Database. Please try again!");</script>';
                        }
                    }else{
                        echo '<script>alert("Password and Confirm password do not match.")</script>';
                    }
                }else{
                    echo '<script>alert("Please enter numeric values in contact.")</script>';
                }
            }else{
                echo '<script>alert("Please enter a valid username (letters, numbers, underscores only).")</script>';
            }
        }else{
            echo '<script>alert("Please enter a valid email.")</script>';
        }
    }else{
        echo '<script>alert("Fill all fields!")</script>';
    }
}
?>