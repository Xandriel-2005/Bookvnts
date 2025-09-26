<?php
include('include/header.php');
?>
    <br/>
    <br/>
    <br/>
    <br/>
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
                <p>Account doesn't exist? | <a href="signup.php">Register/Sign Up</a></p>
			</div>
    </form>
</div>
<?php
include('include/footer.php');
if($_SERVER['REQUEST_METHOD']==='POST'&&isset($_POST['submit'])){
    $usr_id = trim($_POST['usr_id']);
    $password = trim($_POST['password']);

    if(empty($usr_id)||empty($password)){
        echo '<script>alert("Please fill in both fields.");</script>';
    } else {
        $query="SELECT * FROM signup_frm_data WHERE usr_name='$usr_id'";
        $result=mysqli_query($conn, $query);

        if(mysqli_num_rows($result)===0){
            echo '<script>alert("User not found. Please sign up.");</script>';
        }else{
            $user=mysqli_fetch_assoc($result);

            if(md5($password)===$user['password']){
                $_SESSION['usr_id']=$user['S.No.'];
                $_SESSION['usr_name']=$user['usr_name'];
                $date = date('Y-m-d');
                $session_start = date('H:i:s');
                $user_ip = Userip();
                $browser_agent = BrowserAgent();
                $log_sql="INSERT INTO login_details(usr_id, usr_name, date, session_start, user_ip, browser_agent) VALUES('{$user['S.No.']}', '{$user['usr_name']}', '$date', '$session_start', '$user_ip', '$browser_agent')";
                if(mysqli_query($conn, $log_sql)){
                    $_SESSION['session_no'] = mysqli_insert_id($conn);
                }
                echo '<script>alert("You are logged in!!"); window.location.href="events.php";</script>';
            } else {
                echo '<script>alert("Incorrect password.");</script>';
            }
        }
    }
}
?>