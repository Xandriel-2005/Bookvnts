<?php
include('include/header.php');
?>
<div class="container mt-5 pt-5 pb-5 d-flex justify-content-center">
    <div class="login-hub-card" style="width: 100%; max-width: 500px;">
        <div class="text-center mb-4">
            <div class="icon-circle mx-auto mb-3" style="width: 56px; height: 56px; background: #E0F2FE; color: var(--primary); font-size: 20px;"><i class="fa-regular fa-id-badge"></i></div>
            <h2 class="section-title" style="font-size: 24px;">Create an Account</h2>
            <p class="text-muted small">Register to book events and access exclusive passes.</p>
        </div>
        
        <form method="post" action="signup.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label text-muted small fw-bold" style="font-size: 11px;">Email Address</label>
                <input type="email" name="email" class="form-control bg-light border-0" placeholder="name@college.edu" style="padding: 12px 16px;">
            </div>
            <div class="mb-3">
                <label class="form-label text-muted small fw-bold" style="font-size: 11px;">User ID</label>
                <input type="text" name="usr_id" class="form-control bg-light border-0" placeholder="Choose a username" style="padding: 12px 16px;">
            </div>
            <div class="mb-3">
                <label class="form-label text-muted small fw-bold" style="font-size: 11px;">Contact Number</label>
                <input type="text" name="contact" class="form-control bg-light border-0" placeholder="10-digit mobile number" style="padding: 12px 16px;">
            </div>
            <div class="mb-3">
                <label class="form-label text-muted small fw-bold" style="font-size: 11px;">Upload ID</label>
                <input type="file" name="image" class="form-control bg-light border-0" style="padding: 9px 16px;">
            </div>
            <div class="row g-3 mb-4">
                <div class="col-6">
                    <label class="form-label text-muted small fw-bold" style="font-size: 11px;">Password</label>
                    <input type="password" name="password" class="form-control bg-light border-0" placeholder="••••••••" style="padding: 12px 16px;">
                </div>
                <div class="col-6">
                    <label class="form-label text-muted small fw-bold" style="font-size: 11px;">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control bg-light border-0" placeholder="••••••••" style="padding: 12px 16px;">
                </div>
            </div>
            <button type="submit" name="submit-2" class="btn btn-dark-custom w-100 py-3 mb-3">Create Account</button>
            <div class="text-center">
                <span class="text-muted small">Already have an account? <a href="login.php" class="text-primary-custom fw-bold text-decoration-none">Log In</a></span>
            </div>
        </form>
    </div>
</div>

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